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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0035 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			35000 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35001 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35002 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35003 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35004 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35005 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35006 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35007 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35008 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35009 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35010 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35011 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35012 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35013 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35014 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35015 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35016 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35017 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35018 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35019 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35020 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35021 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35022 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35023 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35024 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35025 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35026 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35027 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35028 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35029 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35030 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35031 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35032 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35033 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35034 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35035 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35036 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35037 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35038 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35039 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35040 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35041 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35042 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35043 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35044 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35045 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35046 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35047 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35048 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35049 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35050 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35051 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35052 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35053 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35054 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35055 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35056 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35057 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35058 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35059 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35060 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35061 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35062 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35063 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35064 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35065 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35066 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35067 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35068 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35069 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35070 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35071 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35072 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35073 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35074 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35075 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35076 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35077 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35078 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35079 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35080 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35081 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35082 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35083 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35084 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35085 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35086 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35087 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35088 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35089 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35090 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35091 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35092 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35093 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35094 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35095 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35096 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35097 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35098 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35099 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35100 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35101 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35102 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35103 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35104 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35105 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35106 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35107 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35108 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35109 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35110 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35111 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35112 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35113 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35114 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35115 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35116 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35117 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35118 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35119 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35120 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35121 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35122 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35123 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35124 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35125 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35126 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35127 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35128 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35129 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35130 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35131 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35132 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35133 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35134 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35135 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35136 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35137 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35138 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35139 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35140 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35141 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35142 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35143 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35144 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35145 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35146 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35147 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35148 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35149 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35150 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35151 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35152 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35153 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35154 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35155 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35156 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35157 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35158 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35159 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35160 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35161 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35162 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35163 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35164 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35165 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35166 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35167 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35168 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35169 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35170 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35171 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35172 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35173 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35174 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35175 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35176 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35177 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35178 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35179 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35180 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35181 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35182 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35183 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35184 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35185 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35186 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35187 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35188 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35189 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35190 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35191 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35192 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35193 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35194 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35195 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35196 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35197 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35198 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35199 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35200 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35201 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35202 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35203 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35204 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35205 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35206 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35207 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35208 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35209 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35210 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35211 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35212 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35213 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35214 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35215 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35216 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35217 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35218 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35219 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35220 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35221 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35222 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35223 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35224 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35225 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35226 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35227 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35228 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35229 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35230 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35231 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35232 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35233 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35234 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35235 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35236 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35237 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35238 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35239 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35240 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35241 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35242 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35243 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35244 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35245 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35246 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35247 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35248 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35249 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35250 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35251 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35252 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35253 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35254 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35255 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35256 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35257 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35258 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35259 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35260 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35261 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35262 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35263 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35264 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35265 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35266 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35267 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35268 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35269 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35270 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35271 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35272 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35273 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35274 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35275 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35276 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35277 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35278 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35279 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35280 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35281 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35282 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35283 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35284 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35285 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35286 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35287 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35288 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35289 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35290 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35291 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35292 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35293 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35294 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35295 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35296 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35297 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35298 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35299 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35300 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35301 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35302 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35303 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35304 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35305 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35306 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35307 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35308 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35309 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35310 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35311 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35312 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35313 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35314 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35315 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35316 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35317 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35318 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35319 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35320 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35321 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35322 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35323 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35324 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35325 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35326 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35327 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35328 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35329 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35330 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35331 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35332 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35333 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35334 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35335 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35336 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35337 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35338 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35339 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35340 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35341 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35342 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35343 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35344 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35345 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35346 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35347 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35348 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35349 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35350 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35351 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35352 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35353 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35354 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35355 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35356 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35357 => [
				'validator'                => new IsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35358 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35359 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35360 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35361 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35362 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35363 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35364 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35365 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35366 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35367 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35368 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35369 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35370 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35371 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35372 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35373 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35374 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35375 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35376 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35377 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35378 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35379 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35380 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35381 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35382 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35383 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35384 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35385 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35386 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35387 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35388 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35389 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35390 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35391 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35392 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35393 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35394 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35395 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35396 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35397 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35398 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35399 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35400 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35401 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35402 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35403 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35404 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35405 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35406 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35407 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35408 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35409 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35410 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35411 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35412 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35413 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35414 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35415 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35416 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35417 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35418 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35419 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35420 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35421 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35422 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35423 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35424 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35425 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35426 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35427 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35428 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35429 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35430 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35431 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35432 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35433 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35434 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35435 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35436 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35437 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35438 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35439 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35440 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35441 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35442 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35443 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35444 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35445 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35446 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35447 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35448 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35449 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35450 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35451 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35452 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35453 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35454 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35455 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35456 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35457 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35458 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35459 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35460 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35461 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35462 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35463 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35464 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35465 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35466 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35467 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35468 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35469 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35470 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35471 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35472 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35473 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35474 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35475 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35476 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35477 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35478 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35479 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35480 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35481 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35482 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35483 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35484 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35485 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35486 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35487 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35488 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35489 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35490 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35491 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35492 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35493 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35494 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35495 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35496 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35497 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35498 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35499 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35500 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35501 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35502 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35503 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35504 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35505 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35506 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35507 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35508 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35509 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35510 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35511 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35512 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35513 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35514 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35515 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35516 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35517 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35518 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35519 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35520 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35521 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35522 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35523 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35524 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35525 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35526 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35527 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35528 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35529 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35530 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35531 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35532 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35533 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35534 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35535 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35536 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35537 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35538 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35539 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35540 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35541 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35542 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35543 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35544 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35545 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35546 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35547 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35548 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35549 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35550 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35551 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35552 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35553 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35554 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35555 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35556 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35557 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35558 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35559 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35560 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35561 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35562 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35563 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35564 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35565 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35566 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35567 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35568 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35569 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35570 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35571 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35572 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35573 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35574 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35575 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35576 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35577 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35578 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35579 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35580 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35581 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35582 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35583 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35584 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35585 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35586 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35587 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35588 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35589 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35590 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35591 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35592 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35593 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35594 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35595 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35596 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35597 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35598 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35599 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35600 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35601 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35602 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35603 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35604 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35605 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35606 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35607 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35608 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35609 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35610 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35611 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35612 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35613 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35614 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35615 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35616 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35617 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35618 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35619 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35620 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35621 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35622 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35623 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35624 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35625 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35626 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35627 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35628 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35629 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35630 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35631 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35632 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35633 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35634 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35635 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35636 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35637 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35638 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35639 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35640 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35641 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35642 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35643 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35644 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35645 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35646 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35647 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35648 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35649 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35650 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35651 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35652 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35653 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35654 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35655 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35656 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35657 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35658 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35659 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35660 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35661 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35662 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35663 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35664 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35665 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35666 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35667 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35668 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35669 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35670 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35671 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35672 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35673 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35674 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35675 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35676 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35677 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35678 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35679 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35680 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35681 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35682 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35683 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35684 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35685 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35686 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35687 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35688 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35689 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35690 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35691 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35692 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35693 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35694 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35695 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35696 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35697 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35698 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35699 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35700 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35701 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35702 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35703 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35704 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35705 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35706 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35707 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35708 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35709 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35710 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35711 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35712 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35713 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35714 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35715 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35716 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35717 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35718 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35719 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35720 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35721 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35722 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35723 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35724 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35725 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35726 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35727 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35728 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35729 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35730 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35731 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35732 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35733 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35734 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35735 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35736 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35737 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35738 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35739 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35740 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35741 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35742 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35743 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35744 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35745 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35746 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35747 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35748 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35749 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35750 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35751 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35752 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35753 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35754 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35755 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35756 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35757 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35758 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35759 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35760 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35761 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35762 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35763 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35764 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35765 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35766 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35767 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35768 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35769 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35770 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35771 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35772 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35773 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35774 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35775 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35776 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35777 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35778 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35779 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35780 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35781 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35782 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35783 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35784 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35785 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35786 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35787 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35788 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35789 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35790 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35791 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35792 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35793 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35794 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35795 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35796 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35797 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35798 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35799 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35800 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35801 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35802 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35803 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35804 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35805 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35806 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35807 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35808 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35809 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35810 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35811 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35812 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35813 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35814 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35815 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35816 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35817 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35818 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35819 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35820 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35821 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35822 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35823 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35824 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35825 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35826 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35827 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35828 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35829 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35830 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35831 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35832 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35833 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35834 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35835 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35836 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35837 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35838 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35839 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35840 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35841 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35842 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35843 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35844 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35845 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35846 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35847 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35848 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35849 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35850 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35851 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35852 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35853 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35854 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35855 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35856 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35857 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35858 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35859 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35860 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35861 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35862 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35863 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35864 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35865 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35866 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35867 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35868 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35869 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35870 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35871 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35872 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35873 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35874 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35875 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35876 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35877 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35878 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35879 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35880 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35881 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35882 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35883 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35884 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35885 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35886 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35887 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35888 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35889 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35890 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35891 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35892 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35893 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35894 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35895 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			35896 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35897 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35898 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35899 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35900 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35901 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35902 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35903 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35904 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35905 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35906 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35907 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35908 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35909 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35910 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35911 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35912 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35913 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35914 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35915 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35916 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35917 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35918 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35919 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35920 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35921 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35922 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35923 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35924 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35925 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35926 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35927 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35928 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35929 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35930 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35931 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35932 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35933 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35934 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35935 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35936 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35937 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35938 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35939 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35940 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35941 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35942 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35943 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35944 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35945 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35946 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35947 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35948 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35949 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35950 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35951 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35952 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35953 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35954 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35955 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35956 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35957 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35958 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35959 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35960 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35961 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35962 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35963 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35964 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35965 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35966 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35967 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35968 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35969 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35970 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35971 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35972 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35973 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35974 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35975 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35976 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35977 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35978 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35979 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35980 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35981 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35982 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35983 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35984 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35985 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35986 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35987 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35988 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35989 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35990 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35991 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35992 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35993 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35994 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35995 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35996 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35997 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35998 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			35999 => [
				'validator'                => new IsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
