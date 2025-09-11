<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\Fixtures;

use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\ClassFixture1;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\ClassFixture2;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\ConcreteInterfaceFixture1;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\ConcreteInterfaceFixture2;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\EnumFixture1;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\EnumFixture2;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\IntegerBackedEnumFixture1;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\IntegerBackedEnumFixture2;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\InterfaceFixture1;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\InterfaceFixture2;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\MappedObjectFixture1;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\MappedObjectFixture2;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\StringBackedEnumFixture1;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\StringBackedEnumFixture2;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\TraitFixture1;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\TraitFixture2;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects\ValidatorFixture;
use CodeKandis\ToolKit\Validators\IsArrayValidator;
use CodeKandis\ToolKit\Validators\IsBinaryStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringValidator;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMapping;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMappingInterface;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMappings;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMappingsInterface;
use CodeKandis\ToolKit\Validators\ValidatorInterface;
use DateInterval;
use DateTime;
use DateTimeImmutable;
use DateTimeZone;

/**
 * Represents an enumeration of values.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Values
{
	/**
	 * Represents the value `null`.
	 * @var null
	 */
	public const null NULL = null;

	/**
	 * Represents an array of the value `null`.
	 * @var null[]
	 */
	public const array NULL_ARRAY = [
		self::NULL,
		self::NULL
	];

	/**
	 * Represents a `string` representing the value `null`.
	 * @var string
	 */
	public const string NULL_STRING = 'null';

	/**
	 * Represents an array of `string` representing the value `null`.
	 * @var string[]
	 */
	public const array NULL_STRING_ARRAY = [
		self::NULL_STRING,
		self::NULL_STRING
	];

	/**
	 * Represents an empty `string`.
	 * @var string
	 */
	public const string EMPTY_STRING = '';

	/**
	 * Represents a `boolean` representing the value `false`.
	 * @var bool
	 */
	public const bool BOOLEAN_FALSE = false;

	/**
	 * Represents a `boolean` representing the value `true`.
	 * @var bool
	 */
	public const bool BOOLEAN_TRUE = true;

	/**
	 * Represents an array of `boolean` values.
	 * @var bool[]
	 */
	public const array BOOLEAN_ARRAY_1 = [
		self::BOOLEAN_FALSE,
		self::BOOLEAN_FALSE,
		self::BOOLEAN_FALSE,
		self::BOOLEAN_FALSE,
		self::BOOLEAN_FALSE,
		self::BOOLEAN_FALSE
	];

	/**
	 * Represents an array of `boolean` values.
	 * @var bool[]
	 */
	public const array BOOLEAN_ARRAY_2 = [
		self::BOOLEAN_TRUE,
		self::BOOLEAN_TRUE,
		self::BOOLEAN_TRUE,
		self::BOOLEAN_TRUE,
		self::BOOLEAN_TRUE,
		self::BOOLEAN_TRUE
	];

	/**
	 * Represents an array of mixed `boolean` values.
	 * @var bool[]
	 */
	public const array BOOLEAN_MIXED_ARRAY_1 = [
		self::BOOLEAN_FALSE,
		self::BOOLEAN_TRUE,
		self::BOOLEAN_FALSE,
		self::BOOLEAN_TRUE,
		self::BOOLEAN_FALSE,
		self::BOOLEAN_TRUE
	];

	/**
	 * Represents an array of mixed `boolean` values.
	 * @var bool[]
	 */
	public const array BOOLEAN_MIXED_ARRAY_2 = [
		self::BOOLEAN_TRUE,
		self::BOOLEAN_FALSE,
		self::BOOLEAN_TRUE,
		self::BOOLEAN_FALSE,
		self::BOOLEAN_TRUE,
		self::BOOLEAN_FALSE
	];

	/**
	 * Represents a `boolean integer` representing the value `false`.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_FALSE = 0;

	/**
	 * Represents a `boolean integer` representing the value `true`.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_TRUE = 1;

	/**
	 * Represents an array of `boolean integer` values.
	 * @var int[]
	 */
	public const array BOOLEAN_INTEGER_ARRAY_1 = [
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_FALSE
	];

	/**
	 * Represents an array of `boolean integer` values.
	 * @var int[]
	 */
	public const array BOOLEAN_INTEGER_ARRAY_2 = [
		self::BOOLEAN_INTEGER_TRUE,
		self::BOOLEAN_INTEGER_TRUE,
		self::BOOLEAN_INTEGER_TRUE,
		self::BOOLEAN_INTEGER_TRUE,
		self::BOOLEAN_INTEGER_TRUE,
		self::BOOLEAN_INTEGER_TRUE
	];

	/**
	 * Represents an array of mixed `boolean integer` values.
	 * @var int[]
	 */
	public const array BOOLEAN_INTEGER_MIXED_ARRAY_1 = [
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_TRUE,
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_TRUE,
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_TRUE
	];

	/**
	 * Represents an array of mixed `boolean integer` values.
	 * @var int[]
	 */
	public const array BOOLEAN_INTEGER_MIXED_ARRAY_2 = [
		self::BOOLEAN_INTEGER_TRUE,
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_TRUE,
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_TRUE,
		self::BOOLEAN_INTEGER_FALSE
	];

	/**
	 * Represents a `boolean integer string` representing value `false`.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_FALSE = '0';

	/**
	 * Represents a `boolean integer string` representing value `true`.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_TRUE = '1';

	/**
	 * Represents an array of `boolean integer string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_INTEGER_STRING_ARRAY_1 = [
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_FALSE
	];

	/**
	 * Represents an array of `boolean integer string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_INTEGER_STRING_ARRAY_2 = [
		self::BOOLEAN_INTEGER_STRING_TRUE,
		self::BOOLEAN_INTEGER_STRING_TRUE,
		self::BOOLEAN_INTEGER_STRING_TRUE,
		self::BOOLEAN_INTEGER_STRING_TRUE,
		self::BOOLEAN_INTEGER_STRING_TRUE,
		self::BOOLEAN_INTEGER_STRING_TRUE
	];

	/**
	 * Represents an array of mixed `boolean integer string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 = [
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_TRUE,
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_TRUE,
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_TRUE
	];

	/**
	 * Represents an array of mixed `boolean integer string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 = [
		self::BOOLEAN_INTEGER_STRING_TRUE,
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_TRUE,
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_TRUE,
		self::BOOLEAN_INTEGER_STRING_FALSE
	];

	/**
	 * Represents a `boolean string` representing the value `false`.
	 * @var string
	 */
	public const string BOOLEAN_STRING_FALSE = 'false';

	/**
	 * Represents a `boolean string` representing the value `true`.
	 * @var string
	 */
	public const string BOOLEAN_STRING_TRUE = 'true';

	/**
	 * Represents an array of `boolean string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_STRING_ARRAY_1 = [
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_FALSE
	];

	/**
	 * Represents an array of `boolean string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_STRING_ARRAY_2 = [
		self::BOOLEAN_STRING_TRUE,
		self::BOOLEAN_STRING_TRUE,
		self::BOOLEAN_STRING_TRUE,
		self::BOOLEAN_STRING_TRUE,
		self::BOOLEAN_STRING_TRUE,
		self::BOOLEAN_STRING_TRUE
	];

	/**
	 * Represents an array of mixed `boolean string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_STRING_MIXED_ARRAY_1 = [
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_TRUE,
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_TRUE,
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_TRUE
	];

	/**
	 * Represents an array of mixed `boolean string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_STRING_MIXED_ARRAY_2 = [
		self::BOOLEAN_STRING_TRUE,
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_TRUE,
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_TRUE,
		self::BOOLEAN_STRING_FALSE
	];

	/**
	 * Represents a `binary string` representing the value `24`.
	 * @var string
	 */
	public const string BINARY_STRING_24 = '11000';

	/**
	 * Represents a `binary string` representing the value `42`.
	 * @var string
	 */
	public const string BINARY_STRING_42 = '101010';

	/**
	 * Represents an array of `binary string` values.
	 * @var string[]
	 */
	public const array BINARY_STRING_ARRAY_1 = [
		self::BINARY_STRING_24,
		self::BINARY_STRING_24,
		self::BINARY_STRING_24,
		self::BINARY_STRING_24,
		self::BINARY_STRING_24,
		self::BINARY_STRING_24
	];

	/**
	 * Represents an array of `binary string` values.
	 * @var string[]
	 */
	public const array BINARY_STRING_ARRAY_2 = [
		self::BINARY_STRING_42,
		self::BINARY_STRING_42,
		self::BINARY_STRING_42,
		self::BINARY_STRING_42,
		self::BINARY_STRING_42,
		self::BINARY_STRING_42
	];

	/**
	 * Represents an array of mixed `binary string` values.
	 * @var string[]
	 */
	public const array BINARY_STRING_MIXED_ARRAY_1 = [
		self::BINARY_STRING_24,
		self::BINARY_STRING_42,
		self::BINARY_STRING_24,
		self::BINARY_STRING_42,
		self::BINARY_STRING_24,
		self::BINARY_STRING_42
	];

	/**
	 * Represents an array of mixed `binary string` values.
	 * @var string[]
	 */
	public const array BINARY_STRING_MIXED_ARRAY_2 = [
		self::BINARY_STRING_42,
		self::BINARY_STRING_24,
		self::BINARY_STRING_42,
		self::BINARY_STRING_24,
		self::BINARY_STRING_42,
		self::BINARY_STRING_24
	];

	/**
	 * Represents an `integer` representing the value `24`.
	 * @var int
	 */
	public const int INTEGER_24 = 24;

	/**
	 * Represents an `integer` representing the value `42`.
	 * @var int
	 */
	public const int INTEGER_42 = 42;

	/**
	 * Represents an array of `integer` values.
	 * @var integer[]
	 */
	public const array INTEGER_ARRAY_1 = [
		self::INTEGER_24,
		self::INTEGER_24,
		self::INTEGER_24,
		self::INTEGER_24,
		self::INTEGER_24,
		self::INTEGER_24
	];

	/**
	 * Represents an array of `integer` values.
	 * @var integer[]
	 */
	public const array INTEGER_ARRAY_2 = [
		self::INTEGER_42,
		self::INTEGER_42,
		self::INTEGER_42,
		self::INTEGER_42,
		self::INTEGER_42,
		self::INTEGER_42
	];

	/**
	 * Represents an array of mixed `integer` values.
	 * @var integer[]
	 */
	public const array INTEGER_MIXED_ARRAY_1 = [
		self::INTEGER_24,
		self::INTEGER_42,
		self::INTEGER_24,
		self::INTEGER_42,
		self::INTEGER_24,
		self::INTEGER_42
	];

	/**
	 * Represents an array of mixed `integer` values.
	 * @var integer[]
	 * 4     */
	public const array INTEGER_MIXED_ARRAY_2 = [
		self::INTEGER_42,
		self::INTEGER_24,
		self::INTEGER_42,
		self::INTEGER_24,
		self::INTEGER_42,
		self::INTEGER_24
	];

	/**
	 * Represents an `integer string` representing the value `24`.
	 * @var string
	 */
	public const string INTEGER_STRING_24 = '24';

	/**
	 * Represents an `integer string` representing the value `42`.
	 * @var string
	 */
	public const string INTEGER_STRING_42 = '42';

	/**
	 * Represents an array of `integer string` values.
	 * @var string[]
	 */
	public const array INTEGER_STRING_ARRAY_1 = [
		self::INTEGER_STRING_24,
		self::INTEGER_STRING_24,
		self::INTEGER_STRING_24,
		self::INTEGER_STRING_24,
		self::INTEGER_STRING_24,
		self::INTEGER_STRING_24
	];

	/**
	 * Represents an array of `integer string` values.
	 * @var string[]
	 */
	public const array INTEGER_STRING_ARRAY_2 = [
		self::INTEGER_STRING_42,
		self::INTEGER_STRING_42,
		self::INTEGER_STRING_42,
		self::INTEGER_STRING_42,
		self::INTEGER_STRING_42,
		self::INTEGER_STRING_42
	];

	/**
	 * Represents an array of mixed `integer string` values.
	 * @var string[]
	 */
	public const array INTEGER_STRING_MIXED_ARRAY_1 = [
		self::INTEGER_STRING_24,
		self::INTEGER_STRING_42,
		self::INTEGER_STRING_24,
		self::INTEGER_STRING_42,
		self::INTEGER_STRING_24,
		self::INTEGER_STRING_42
	];

	/**
	 * Represents an array of mixed `integer string` values.
	 * @var string[]
	 */
	public const array INTEGER_STRING_MIXED_ARRAY_2 = [
		self::INTEGER_STRING_42,
		self::INTEGER_STRING_24,
		self::INTEGER_STRING_42,
		self::INTEGER_STRING_24,
		self::INTEGER_STRING_42,
		self::INTEGER_STRING_24
	];

	/**
	 * Represents a `float` representing the value `24.42`.
	 * @var float
	 */
	public const float FLOAT_24 = 24.42;

	/**
	 * Represents a `float` representing the value `42.24`.
	 * @var float
	 */
	public const float FLOAT_42 = 42.24;

	/**
	 * Represents an array of `float` values.
	 * @var float[]
	 */
	public const array FLOAT_ARRAY_1 = [
		self::FLOAT_24,
		self::FLOAT_24,
		self::FLOAT_24,
		self::FLOAT_24,
		self::FLOAT_24,
		self::FLOAT_24
	];

	/**
	 * Represents an array of `float` values.
	 * @var float[]
	 */
	public const array FLOAT_ARRAY_2 = [
		self::FLOAT_42,
		self::FLOAT_42,
		self::FLOAT_42,
		self::FLOAT_42,
		self::FLOAT_42,
		self::FLOAT_42
	];

	/**
	 * Represents an array of mixed `float` values.
	 * @var float[]
	 */
	public const array FLOAT_MIXED_ARRAY_1 = [
		self::FLOAT_24,
		self::FLOAT_42,
		self::FLOAT_24,
		self::FLOAT_42,
		self::FLOAT_24,
		self::FLOAT_42
	];

	/**
	 * Represents an array of mixed `float` values.
	 * @var float[]
	 */
	public const array FLOAT_MIXED_ARRAY_2 = [
		self::FLOAT_42,
		self::FLOAT_24,
		self::FLOAT_42,
		self::FLOAT_24,
		self::FLOAT_42,
		self::FLOAT_24
	];

	/**
	 * Represents a `float string` representing the value `24.42`.
	 * @var string
	 */
	public const string FLOAT_STRING_24 = '24.42';

	/**
	 * Represents a `float string` representing the value `42.24`.
	 * @var string
	 */
	public const string FLOAT_STRING_42 = '42.24';

	/**
	 * Represents an array of `float string` values.
	 * @var string[]
	 */
	public const array FLOAT_STRING_ARRAY_1 = [
		self::FLOAT_STRING_24,
		self::FLOAT_STRING_24,
		self::FLOAT_STRING_24,
		self::FLOAT_STRING_24,
		self::FLOAT_STRING_24,
		self::FLOAT_STRING_24
	];

	/**
	 * Represents an array of `float string` values.
	 * @var string[]
	 */
	public const array FLOAT_STRING_ARRAY_2 = [
		self::FLOAT_STRING_42,
		self::FLOAT_STRING_42,
		self::FLOAT_STRING_42,
		self::FLOAT_STRING_42,
		self::FLOAT_STRING_42,
		self::FLOAT_STRING_42
	];

	/**
	 * Represents an array of mixed `float string` values.
	 * @var string[]
	 */
	public const array FLOAT_STRING_MIXED_ARRAY_1 = [
		self::FLOAT_STRING_24,
		self::FLOAT_STRING_42,
		self::FLOAT_STRING_24,
		self::FLOAT_STRING_42,
		self::FLOAT_STRING_24,
		self::FLOAT_STRING_42
	];

	/**
	 * Represents an array of mixed `float string` values.
	 * @var string[]
	 */
	public const array FLOAT_STRING_MIXED_ARRAY_2 = [
		self::FLOAT_STRING_42,
		self::FLOAT_STRING_24,
		self::FLOAT_STRING_42,
		self::FLOAT_STRING_24,
		self::FLOAT_STRING_42,
		self::FLOAT_STRING_24
	];

	/**
	 * Represents a `string` representing a `DateTime` value.
	 * @var string
	 */
	public const string DATETIME_STRING_1 = '1990-05-14 12:24:42.123456';

	/**
	 * Represents a `string` representing a `DateTime` value.
	 * @var string
	 */
	public const string DATETIME_STRING_2 = '12:24:42.123456 1990-05-14';

	/**
	 * Represents an array of `DateTime string` values.
	 * @var string[]
	 */
	public const array DATETIME_STRING_ARRAY_1 = [
		self::DATETIME_STRING_1,
		self::DATETIME_STRING_1
	];

	/**
	 * Represents an array of `DateTime string` values.
	 * @var string[]
	 */
	public const array DATETIME_STRING_ARRAY_2 = [
		self::DATETIME_STRING_2,
		self::DATETIME_STRING_2
	];

	/**
	 * Represents an array of mixed `DateTime string` values.
	 * @var string[]
	 */
	public const array DATETIME_STRING_MIXED_ARRAY_1 = [
		self::DATETIME_STRING_1,
		self::DATETIME_STRING_2
	];

	/**
	 * Represents an array of mixed `DateTime string` values.
	 * @var string[]
	 */
	public const array DATETIME_STRING_MIXED_ARRAY_2 = [
		self::DATETIME_STRING_2,
		self::DATETIME_STRING_1
	];

	/**
	 * Represents a `DateTime` format.
	 * @var string
	 */
	public const string DATETIME_FORMAT_1 = 'Y-m-d H:i:s.u';

	/**
	 * Represents a `DateTime` format.
	 * @var string
	 */
	public const string DATETIME_FORMAT_2 = 'H:i:s.u Y-m-d';

	/**
	 * Represents a `DateTimeZone string`.
	 * @var string
	 */
	public const string DATETIMEZONE_STRING_1 = 'UTC';

	/**
	 * Represents a `DateTimeZone string`.
	 * @var string
	 */
	public const string DATETIMEZONE_STRING_2 = 'Europe/Berlin';

	/**
	 * Represents an array of `DateTimeZone string`.
	 * @var string[]
	 */
	public const array DATETIMEZONE_STRING_ARRAY_1 = [
		self::DATETIMEZONE_STRING_1,
		self::DATETIMEZONE_STRING_1
	];

	/**
	 * Represents an array of `DateTimeZone string`.
	 * @var string[]
	 */
	public const array DATETIMEZONE_STRING_ARRAY_2 = [
		self::DATETIMEZONE_STRING_2,
		self::DATETIMEZONE_STRING_2
	];

	/**
	 * Represents an array of mixed `DateTimeZone string`.
	 * @var string[]
	 */
	public const array DATETIMEZONE_STRING_MIXED_ARRAY_1 = [
		self::DATETIMEZONE_STRING_1,
		self::DATETIMEZONE_STRING_2
	];

	/**
	 * Represents an array of mixed `DateTimeZone string`.
	 * @var string[]
	 */
	public const array DATETIMEZONE_STRING_MIXED_ARRAY_2 = [
		self::DATETIMEZONE_STRING_2,
		self::DATETIMEZONE_STRING_1
	];

	/**
	 * Represents a `string` representing a `DateInterval` value.
	 * @var string
	 */
	public const string DATEINTERVAL_STRING_1 = 'P24W';

	/**
	 * Represents a `string` representing a `DateInterval` value.
	 * @var string
	 */
	public const string DATEINTERVAL_STRING_2 = 'P42D';

	/**
	 * Represents an array of `DateInterval string` values.
	 * @var string[]
	 */
	public const array DATEINTERVAL_STRING_ARRAY_1 = [
		self::DATEINTERVAL_STRING_1,
		self::DATEINTERVAL_STRING_1
	];

	/**
	 * Represents an array of `DateInterval string` values.
	 * @var string[]
	 */
	public const array DATEINTERVAL_STRING_ARRAY_2 = [
		self::DATEINTERVAL_STRING_2,
		self::DATEINTERVAL_STRING_2
	];

	/**
	 * Represents an array of mixed `DateInterval string` values.
	 * @var string[]
	 */
	public const array DATEINTERVAL_STRING_MIXED_ARRAY_1 = [
		self::DATEINTERVAL_STRING_1,
		self::DATEINTERVAL_STRING_2
	];

	/**
	 * Represents an array of mixed `DateInterval string` values.
	 * @var string[]
	 */
	public const array DATEINTERVAL_STRING_MIXED_ARRAY_2 = [
		self::DATEINTERVAL_STRING_2,
		self::DATEINTERVAL_STRING_1
	];

	/**
	 * Represents an `enum` value.
	 * @var EnumFixture1
	 */
	public const EnumFixture1 ENUM_1 = EnumFixture1::Value1;

	/**
	 * Represents an `enum` value.
	 * @var EnumFixture2
	 */
	public const EnumFixture2 ENUM_2 = EnumFixture2::Value2;

	/**
	 * Represents an array of `enum` values.
	 * @var EnumFixture2[]
	 */
	public const array ENUM_ARRAY_1 = [
		self::ENUM_1,
		self::ENUM_1
	];

	/**
	 * Represents an array of `enum` values.
	 * @var EnumFixture2[]
	 */
	public const array ENUM_ARRAY_2 = [
		self::ENUM_2,
		self::ENUM_2
	];

	/**
	 * Represents an array of mixed `enum` values.
	 * @var object[]
	 */
	public const array ENUM_MIXED_ARRAY_1 = [
		self::ENUM_1,
		self::ENUM_2
	];

	/**
	 * Represents an array of mixed `enum` values.
	 * @var object[]
	 */
	public const array ENUM_MIXED_ARRAY_2 = [
		self::ENUM_2,
		self::ENUM_1
	];

	/**
	 * Represents an enum name.
	 * @var string
	 */
	public const string ENUM_NAME_1 = EnumFixture1::class;

	/**
	 * Represents an enum name.
	 * @var string
	 */
	public const string ENUM_NAME_2 = EnumFixture2::class;

	/**
	 * Represents an array of enum names.
	 * @var string[]
	 */
	public const array ENUM_NAME_ARRAY_1 = [
		self::ENUM_NAME_1,
		self::ENUM_NAME_1
	];

	/**
	 * Represents an array of enum names.
	 * @var string[]
	 */
	public const array ENUM_NAME_ARRAY_2 = [
		self::ENUM_NAME_2,
		self::ENUM_NAME_2
	];

	/**
	 * Represents an array of mixed enum names.
	 * @var string[]
	 */
	public const array ENUM_NAME_MIXED_ARRAY_1 = [
		self::ENUM_NAME_1,
		self::ENUM_NAME_2
	];

	/**
	 * Represents an array of mixed enum names.
	 * @var string[]
	 */
	public const array ENUM_NAME_MIXED_ARRAY_2 = [
		self::ENUM_NAME_2,
		self::ENUM_NAME_1
	];

	/**
	 * Represents an `integer backed enum` value.
	 * @var IntegerBackedEnumFixture1
	 */
	public const IntegerBackedEnumFixture1 INTEGER_BACKED_ENUM_1 = IntegerBackedEnumFixture1::Value1;

	/**
	 * Represents an `integer backed enum` value.
	 * @var IntegerBackedEnumFixture2
	 */
	public const IntegerBackedEnumFixture2 INTEGER_BACKED_ENUM_2 = IntegerBackedEnumFixture2::Value2;

	/**
	 * Represents an array of `integer backed enum` values.
	 * @var IntegerBackedEnumFixture1[]
	 */
	public const array INTEGER_BACKED_ENUM_ARRAY_1 = [
		self::INTEGER_BACKED_ENUM_1,
		self::INTEGER_BACKED_ENUM_1
	];

	/**
	 * Represents an array of `integer backed enum` values.
	 * @var IntegerBackedEnumFixture2[]
	 */
	public const array INTEGER_BACKED_ENUM_ARRAY_2 = [
		self::INTEGER_BACKED_ENUM_2,
		self::INTEGER_BACKED_ENUM_2
	];

	/**
	 * Represents an array of mixed `integer backed enum` values.
	 * @var object[]
	 */
	public const array INTEGER_BACKED_ENUM_MIXED_ARRAY_1 = [
		self::INTEGER_BACKED_ENUM_1,
		self::INTEGER_BACKED_ENUM_2
	];

	/**
	 * Represents an array of mixed `integer backed enum` values.
	 * @var object[]
	 */
	public const array INTEGER_BACKED_ENUM_MIXED_ARRAY_2 = [
		self::INTEGER_BACKED_ENUM_2,
		self::INTEGER_BACKED_ENUM_1
	];

	/**
	 * Represents an `integer` backed enum name.
	 * @var string
	 */
	public const string INTEGER_BACKED_ENUM_NAME_1 = IntegerBackedEnumFixture1::class;

	/**
	 * Represents an `integer` backed enum name.
	 * @var string
	 */
	public const string INTEGER_BACKED_ENUM_NAME_2 = IntegerBackedEnumFixture2::class;

	/**
	 * Represents an array of `integer` backed enum names.
	 * @var string[]
	 */
	public const array INTEGER_BACKED_ENUM_NAME_ARRAY_1 = [
		self::INTEGER_BACKED_ENUM_NAME_1,
		self::INTEGER_BACKED_ENUM_NAME_1
	];

	/**
	 * Represents an array of `integer` backed enum names.
	 * @var string[]
	 */
	public const array INTEGER_BACKED_ENUM_NAME_ARRAY_2 = [
		self::INTEGER_BACKED_ENUM_NAME_2,
		self::INTEGER_BACKED_ENUM_NAME_2
	];

	/**
	 * Represents an array of mixed `integer` backed enum names.
	 * @var string[]
	 */
	public const array INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1 = [
		self::INTEGER_BACKED_ENUM_NAME_1,
		self::INTEGER_BACKED_ENUM_NAME_2
	];

	/**
	 * Represents an array of mixed `integer` backed enum names.
	 * @var string[]
	 */
	public const array INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2 = [
		self::INTEGER_BACKED_ENUM_NAME_2,
		self::INTEGER_BACKED_ENUM_NAME_1
	];

	/**
	 * Represents an `string backed enum` value.
	 * @var StringBackedEnumFixture1
	 */
	public const StringBackedEnumFixture1 STRING_BACKED_ENUM_1 = StringBackedEnumFixture1::Value1;

	/**
	 * Represents an `string backed enum` value.
	 * @var StringBackedEnumFixture2
	 */
	public const StringBackedEnumFixture2 STRING_BACKED_ENUM_2 = StringBackedEnumFixture2::Value2;

	/**
	 * Represents an array of `string backed enum` values.
	 * @var StringBackedEnumFixture1[]
	 */
	public const array STRING_BACKED_ENUM_ARRAY_1 = [
		self::STRING_BACKED_ENUM_1,
		self::STRING_BACKED_ENUM_1
	];

	/**
	 * Represents an array of `string backed enum` values.
	 * @var StringBackedEnumFixture2[]
	 */
	public const array STRING_BACKED_ENUM_ARRAY_2 = [
		self::STRING_BACKED_ENUM_2,
		self::STRING_BACKED_ENUM_2
	];

	/**
	 * Represents an array of mixed `string backed enum` values.
	 * @var object[]
	 */
	public const array STRING_BACKED_ENUM_MIXED_ARRAY_1 = [
		self::STRING_BACKED_ENUM_1,
		self::STRING_BACKED_ENUM_2
	];

	/**
	 * Represents an array of mixed `string backed enum` values.
	 * @var object[]
	 */
	public const array STRING_BACKED_ENUM_MIXED_ARRAY_2 = [
		self::STRING_BACKED_ENUM_2,
		self::STRING_BACKED_ENUM_1
	];

	/**
	 * Represents a `string` backed enum name.
	 * @var string
	 */
	public const string STRING_BACKED_ENUM_NAME_1 = StringBackedEnumFixture1::class;

	/**
	 * Represents a `string` backed enum name.
	 * @var string
	 */
	public const string STRING_BACKED_ENUM_NAME_2 = StringBackedEnumFixture2::class;

	/**
	 * Represents an array of `string` backed enum names.
	 * @var string[]
	 */
	public const array STRING_BACKED_ENUM_NAME_ARRAY_1 = [
		self::STRING_BACKED_ENUM_NAME_1,
		self::STRING_BACKED_ENUM_NAME_1
	];

	/**
	 * Represents an array of `string` backed enum names.
	 * @var string[]
	 */
	public const array STRING_BACKED_ENUM_NAME_ARRAY_2 = [
		self::STRING_BACKED_ENUM_NAME_2,
		self::STRING_BACKED_ENUM_NAME_2
	];

	/**
	 * Represents an array of mixed `string` backed enum names.
	 * @var string[]
	 */
	public const array STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 = [
		self::STRING_BACKED_ENUM_NAME_1,
		self::STRING_BACKED_ENUM_NAME_2
	];

	/**
	 * Represents an array of mixed `string` backed enum names.
	 * @var string[]
	 */
	public const array STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 = [
		self::STRING_BACKED_ENUM_NAME_2,
		self::STRING_BACKED_ENUM_NAME_1
	];

	/**
	 * Represents a nonexistent enum name.
	 * @var string
	 */
	public const string NONEXISTENT_ENUM_NAME_1 = 'nonExistentEnumName1';

	/**
	 * Represents a nonexistent enum name.
	 * @var string
	 */
	public const string NONEXISTENT_ENUM_NAME_2 = 'nonExistentEnumName2';

	/**
	 * Represents an interface name.
	 * @var string
	 */
	public const string INTERFACE_NAME_1 = InterfaceFixture1::class;

	/**
	 * Represents an interface name.
	 * @var string
	 */
	public const string INTERFACE_NAME_2 = InterfaceFixture2::class;

	/**
	 * Represents an array of interface names.
	 * @var string[]
	 */
	public const array INTERFACE_NAME_ARRAY_1 = [
		self::INTERFACE_NAME_1,
		self::INTERFACE_NAME_1
	];

	/**
	 * Represents an array of interface names.
	 * @var string[]
	 */
	public const array INTERFACE_NAME_ARRAY_2 = [
		self::INTERFACE_NAME_2,
		self::INTERFACE_NAME_2
	];

	/**
	 * Represents an array of mixed interface names.
	 * @var string[]
	 */
	public const array INTERFACE_NAME_MIXED_ARRAY_1 = [
		self::INTERFACE_NAME_1,
		self::INTERFACE_NAME_2
	];

	/**
	 * Represents an array of mixed interface names.
	 * @var string[]
	 */
	public const array INTERFACE_NAME_MIXED_ARRAY_2 = [
		self::INTERFACE_NAME_2,
		self::INTERFACE_NAME_1
	];

	/**
	 * Represents a concrete interface name.
	 * @var string
	 */
	public const string CONCRETE_INTERFACE_NAME_1 = ConcreteInterfaceFixture1::class;

	/**
	 * Represents a concrete interface name.
	 * @var string
	 */
	public const string CONCRETE_INTERFACE_NAME_2 = ConcreteInterfaceFixture2::class;

	/**
	 * Represents an array of concrete interface names.
	 * @var string[]
	 */
	public const array CONCRETE_INTERFACE_NAME_ARRAY_1 = [
		self::CONCRETE_INTERFACE_NAME_1,
		self::CONCRETE_INTERFACE_NAME_1
	];

	/**
	 * Represents an array of concrete interface names.
	 * @var string[]
	 */
	public const array CONCRETE_INTERFACE_NAME_ARRAY_2 = [
		self::CONCRETE_INTERFACE_NAME_2,
		self::CONCRETE_INTERFACE_NAME_2
	];

	/**
	 * Represents an array of mixed concrete interface names.
	 * @var string[]
	 */
	public const array CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1 = [
		self::CONCRETE_INTERFACE_NAME_1,
		self::CONCRETE_INTERFACE_NAME_2
	];

	/**
	 * Represents an array of mixed concrete interface names.
	 * @var string[]
	 */
	public const array CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2 = [
		self::CONCRETE_INTERFACE_NAME_2,
		self::CONCRETE_INTERFACE_NAME_1
	];

	/**
	 * Represents a nonexistent interface name.
	 * @var string
	 */
	public const string NONEXISTENT_INTERFACE_NAME_1 = 'nonExistentInterfaceName1';

	/**
	 * Represents a nonexistent interface name.
	 * @var string
	 */
	public const string NONEXISTENT_INTERFACE_NAME_2 = 'nonExistentInterfaceName2';

	/**
	 * Represents a class name.
	 * @var string
	 */
	public const string CLASS_NAME_1 = ClassFixture1::class;

	/**
	 * Represents a class name.
	 * @var string
	 */
	public const string CLASS_NAME_2 = ClassFixture2::class;

	/**
	 * Represents an array of class names.
	 * @var string[]
	 */
	public const array CLASS_NAME_ARRAY_1 = [
		self::CLASS_NAME_1,
		self::CLASS_NAME_1
	];

	/**
	 * Represents an array of class names.
	 * @var string[]
	 */
	public const array CLASS_NAME_ARRAY_2 = [
		self::CLASS_NAME_2,
		self::CLASS_NAME_2
	];

	/**
	 * Represents an array of mixed class names.
	 * @var string[]
	 */
	public const array CLASS_NAME_MIXED_ARRAY_1 = [
		self::CLASS_NAME_1,
		self::CLASS_NAME_2
	];

	/**
	 * Represents an array of mixed class names.
	 * @var string[]
	 */
	public const array CLASS_NAME_MIXED_ARRAY_2 = [
		self::CLASS_NAME_2,
		self::CLASS_NAME_1
	];

	/**
	 * Represents a nonexistent class name.
	 * @var string
	 */
	public const string NONEXISTENT_CLASS_NAME_1 = 'nonExistentClassName1';

	/**
	 * Represents a nonexistent class name.
	 * @var string
	 */
	public const string NONEXISTENT_CLASS_NAME_2 = 'nonExistentClassName2';

	/**
	 * Represents a trait name.
	 * @var string
	 */
	public const string TRAIT_NAME_1 = TraitFixture1::class;

	/**
	 * Represents a trait name.
	 * @var string
	 */
	public const string TRAIT_NAME_2 = TraitFixture2::class;

	/**
	 * Represents an array of trait names.
	 * @var string[]
	 */
	public const array TRAIT_NAME_ARRAY_1 = [
		self::TRAIT_NAME_1,
		self::TRAIT_NAME_1
	];

	/**
	 * Represents an array of trait names.
	 * @var string[]
	 */
	public const array TRAIT_NAME_ARRAY_2 = [
		self::TRAIT_NAME_2,
		self::TRAIT_NAME_2
	];

	/**
	 * Represents an array of mixed trait names.
	 * @var string[]
	 */
	public const array TRAIT_NAME_MIXED_ARRAY_1 = [
		self::TRAIT_NAME_1,
		self::TRAIT_NAME_2
	];

	/**
	 * Represents an array of mixed trait names.
	 * @var string[]
	 */
	public const array TRAIT_NAME_MIXED_ARRAY_2 = [
		self::TRAIT_NAME_2,
		self::TRAIT_NAME_1
	];

	/**
	 * Represents a nonexistent trait name.
	 * @var string
	 */
	public const string NONEXISTENT_TRAIT_NAME_1 = 'nonExistentTraitName1';

	/**
	 * Represents a nonexistent trait name.
	 * @var string
	 */
	public const string NONEXISTENT_TRAIT_NAME_2 = 'nonExistentTraitName2';

	/**
	 * Represents an array of interface or class names.
	 * @var string[]
	 */
	public const array INTERFACE_OR_CLASS_NAME_ARRAY_1 = [
		self::INTERFACE_NAME_1,
		self::CONCRETE_INTERFACE_NAME_1,
		self::CLASS_NAME_1
	];

	/**
	 * Represents an array of interface or class names.
	 * @var string[]
	 */
	public const array INTERFACE_OR_CLASS_NAME_ARRAY_2 = [
		self::INTERFACE_NAME_2,
		self::CONCRETE_INTERFACE_NAME_2,
		self::CLASS_NAME_2
	];

	/**
	 * Represents an array of mixed interface or class names.
	 * @var string[]
	 */
	public const array INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 = [
		self::INTERFACE_NAME_1,
		self::INTERFACE_NAME_2,
		self::CONCRETE_INTERFACE_NAME_1,
		self::CONCRETE_INTERFACE_NAME_2,
		self::CLASS_NAME_1,
		self::CLASS_NAME_2
	];

	/**
	 * Represents an array of mixed interface or class names.
	 * @var string[]
	 */
	public const array INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 = [
		self::INTERFACE_NAME_2,
		self::INTERFACE_NAME_1,
		self::CONCRETE_INTERFACE_NAME_2,
		self::CONCRETE_INTERFACE_NAME_1,
		self::CLASS_NAME_2,
		self::CLASS_NAME_1
	];

	/**
	 * Represents an array of interface, class or enum names.
	 * @var string[]
	 */
	public const array INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 = [
		self::ENUM_NAME_1,
		self::INTEGER_BACKED_ENUM_NAME_1,
		self::STRING_BACKED_ENUM_NAME_1,
		self::INTERFACE_NAME_1,
		self::CONCRETE_INTERFACE_NAME_1,
		self::CLASS_NAME_1
	];

	/**
	 * Represents an array of interface, class or enum names.
	 * @var string[]
	 */
	public const array INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 = [
		self::ENUM_NAME_2,
		self::INTEGER_BACKED_ENUM_NAME_2,
		self::STRING_BACKED_ENUM_NAME_2,
		self::INTERFACE_NAME_2,
		self::CONCRETE_INTERFACE_NAME_2,
		self::CLASS_NAME_2
	];

	/**
	 * Represents an array of mixed interface, class or enum names.
	 * @var string[]
	 */
	public const array INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 = [
		self::ENUM_NAME_1,
		self::ENUM_NAME_2,
		self::INTEGER_BACKED_ENUM_NAME_1,
		self::INTEGER_BACKED_ENUM_NAME_2,
		self::STRING_BACKED_ENUM_NAME_1,
		self::STRING_BACKED_ENUM_NAME_2,
		self::INTERFACE_NAME_1,
		self::INTERFACE_NAME_2,
		self::CONCRETE_INTERFACE_NAME_1,
		self::CONCRETE_INTERFACE_NAME_2,
		self::CLASS_NAME_1,
		self::CLASS_NAME_2
	];

	/**
	 * Represents an array of mixed interface, class or enum names.
	 * @var string[]
	 */
	public const array INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 = [
		self::ENUM_NAME_2,
		self::ENUM_NAME_1,
		self::INTEGER_BACKED_ENUM_NAME_2,
		self::INTEGER_BACKED_ENUM_NAME_1,
		self::STRING_BACKED_ENUM_NAME_2,
		self::STRING_BACKED_ENUM_NAME_1,
		self::INTERFACE_NAME_2,
		self::INTERFACE_NAME_1,
		self::CONCRETE_INTERFACE_NAME_2,
		self::CONCRETE_INTERFACE_NAME_1,
		self::CLASS_NAME_2,
		self::CLASS_NAME_1
	];

	/**
	 * Represents an array of interface, class, enum or trait names.
	 * @var string[]
	 */
	public const array INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 = [
		self::ENUM_NAME_1,
		self::INTEGER_BACKED_ENUM_NAME_1,
		self::STRING_BACKED_ENUM_NAME_1,
		self::INTERFACE_NAME_1,
		self::CONCRETE_INTERFACE_NAME_1,
		self::CLASS_NAME_1,
		self::TRAIT_NAME_1
	];

	/**
	 * Represents an array of interface, class, enum or trait names.
	 * @var string[]
	 */
	public const array INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 = [
		self::ENUM_NAME_2,
		self::INTEGER_BACKED_ENUM_NAME_2,
		self::STRING_BACKED_ENUM_NAME_2,
		self::INTERFACE_NAME_2,
		self::CONCRETE_INTERFACE_NAME_2,
		self::CLASS_NAME_2,
		self::TRAIT_NAME_2
	];

	/**
	 * Represents an array of mixed interface, class, enum or trait names.
	 * @var string[]
	 */
	public const array INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 = [
		self::ENUM_NAME_1,
		self::ENUM_NAME_2,
		self::INTEGER_BACKED_ENUM_NAME_1,
		self::INTEGER_BACKED_ENUM_NAME_2,
		self::STRING_BACKED_ENUM_NAME_1,
		self::STRING_BACKED_ENUM_NAME_2,
		self::INTERFACE_NAME_1,
		self::INTERFACE_NAME_2,
		self::CONCRETE_INTERFACE_NAME_1,
		self::CONCRETE_INTERFACE_NAME_2,
		self::CLASS_NAME_1,
		self::CLASS_NAME_2,
		self::TRAIT_NAME_1,
		self::TRAIT_NAME_2
	];

	/**
	 * Represents an array of mixed interface, class, enum or trait names.
	 * @var string[]
	 */
	public const array INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 = [
		self::ENUM_NAME_2,
		self::ENUM_NAME_1,
		self::INTEGER_BACKED_ENUM_NAME_2,
		self::INTEGER_BACKED_ENUM_NAME_1,
		self::STRING_BACKED_ENUM_NAME_2,
		self::STRING_BACKED_ENUM_NAME_1,
		self::INTERFACE_NAME_2,
		self::INTERFACE_NAME_1,
		self::CONCRETE_INTERFACE_NAME_2,
		self::CONCRETE_INTERFACE_NAME_1,
		self::CLASS_NAME_2,
		self::CLASS_NAME_1,
		self::TRAIT_NAME_2,
		self::TRAIT_NAME_1
	];

	/**
	 * Represents the regular expression of a `binary string` value.
	 * @var string
	 */
	public const string REG_EX_BINARY_STRING = '~^[01]+$~';

	/**
	 * Represents the regular expression of an `integer string` value.
	 * @var string
	 */
	public const string REG_EX_INTEGER_STRING = '~^\\-?\d+$~';

	/**
	 * Represents the regular expression of a `float string` value.
	 * @var string
	 */
	public const string REG_EX_FLOAT_STRING = '~^\\-?\d+(?:\\.\d+)?$~';

	/**
	 * Represents an array of regular expressions.
	 * @var string[]
	 */
	public const array REG_EX_ARRAY = [
		self::REG_EX_BINARY_STRING,
		self::REG_EX_INTEGER_STRING,
		self::REG_EX_FLOAT_STRING
	];

	/**
	 * Represents an invalid regular expression.
	 * @var string
	 */
	public const string INVALID_REG_EX_1 = '~invalidRegEx1';

	/**
	 * Represents an invalid regular expression.
	 * @var string
	 */
	public const string INVALID_REG_EX_2 = '~invalidRegEx2';

	/**
	 * Represents a validator mapping key.
	 * @var string
	 */
	public const string VALIDATOR_MAPPING_KEY_1 = 'key0';

	/**
	 * Represents a validator mapping key.
	 * @var string
	 */
	public const string VALIDATOR_MAPPING_KEY_2 = 'key1';

	/**
	 * Represents a validator mapping key.
	 * @var string
	 */
	public const string VALIDATOR_MAPPING_KEY_3 = 'key2';

	/**
	 * Represents a validator mapping key.
	 * @var int
	 */
	public const int VALIDATOR_MAPPING_KEY_4 = 42;

	/**
	 * Represents an unknown validator mapping key.
	 * @var string
	 */
	public const string UNKNOWN_VALIDATOR_MAPPING_KEY = 'unknownKey';

	/**
	 * Stores a `DateTimeImmutableObject`.
	 * @var DateTimeImmutable
	 */
	private static DateTimeImmutable $dateTimeImmutableObject1;

	/**
	 * Stores a `DateTimeImmutableObject`.
	 * @var DateTimeImmutable
	 */
	private static DateTimeImmutable $dateTimeImmutableObject2;

	/**
	 * Stores a `DateTimeObject`.
	 * @var DateTime
	 */
	private static DateTime $dateTimeObject1;

	/**
	 * Stores a `DateTimeObject`.
	 * @var DateTime
	 */
	private static DateTime $dateTimeObject2;

	/**
	 * Stores a `DateTimeZoneObject`.
	 * @var DateTimeZone
	 */
	private static DateTimeZone $dateTimeZoneObject1;

	/**
	 * Stores a `DateTimeZoneObject`.
	 * @var DateTimeZone
	 */
	private static DateTimeZone $dateTimeZoneObject2;

	/**
	 * Stores a `DateIntervalObject`.
	 * @var DateInterval
	 */
	private static DateInterval $dateIntervalObject1;

	/**
	 * Stores a `DateIntervalObject`.
	 * @var DateInterval
	 */
	private static DateInterval $dateIntervalObject2;

	/**
	 * Stores a `ConcreteInterfaceFixture1`.
	 * @var ConcreteInterfaceFixture1
	 */
	private static ConcreteInterfaceFixture1 $concreteInterfaceFixture1;

	/**
	 * Stores a `ConcreteInterfaceFixture2`.
	 * @var ConcreteInterfaceFixture2
	 */
	private static ConcreteInterfaceFixture2 $concreteInterfaceFixture2;

	/**
	 * Stores a `ClassFixture1`.
	 * @var ClassFixture1
	 */
	private static ClassFixture1 $classFixture1;

	/**
	 * Stores a `ClassFixture2`.
	 * @var ClassFixture2
	 */
	private static ClassFixture2 $classFixture2;

	/**
	 * Creates a `DateTimeImmutable` object.
	 * @return DateTimeImmutable The created `DateTimeImmutable` object.
	 */
	public static function createDateTimeImmutableObject1(): DateTimeImmutable
	{
		return self::$dateTimeImmutableObject1 ??= new DateTimeImmutable( Values::DATETIME_STRING_1 );
	}

	/**
	 * Creates a `DateTimeImmutable` object.
	 * @return DateTimeImmutable The created `DateTimeImmutable` object.
	 */
	public static function createDateTimeImmutableObject2(): DateTimeImmutable
	{
		return self::$dateTimeImmutableObject2 ??= new DateTimeImmutable( Values::DATETIME_STRING_2 );
	}

	/**
	 * Creates an array of `DateTimeImmutable` objects.
	 * @return DateTimeImmutable[] The created array of `DateTimeImmutable` objects.
	 */
	public static function createDateTimeImmutableObjectArray1(): array
	{
		return [
			static::createDateTimeImmutableObject1(),
			static::createDateTimeImmutableObject1()
		];
	}

	/**
	 * Creates an array of `DateTimeImmutable` objects.
	 * @return DateTimeImmutable[] The created array of `DateTimeImmutable` objects.
	 */
	public static function createDateTimeImmutableObjectArray2(): array
	{
		return [
			static::createDateTimeImmutableObject2(),
			static::createDateTimeImmutableObject2()
		];
	}

	/**
	 * Creates an array of mixed `DateTimeImmutable` objects.
	 * @return DateTimeImmutable[] The created array of mixed `DateTimeImmutable` objects.
	 */
	public static function createDateTimeImmutableObjectMixedArray1(): array
	{
		return [
			static::createDateTimeImmutableObject1(),
			static::createDateTimeImmutableObject2()
		];
	}

	/**
	 * Creates an array of mixed `DateTimeImmutable` objects.
	 * @return DateTimeImmutable[] The created array of mixed `DateTimeImmutable` objects.
	 */
	public static function createDateTimeImmutableObjectMixedArray2(): array
	{
		return [
			static::createDateTimeImmutableObject2(),
			static::createDateTimeImmutableObject1()
		];
	}

	/**
	 * Creates a `DateTime` object.
	 * @return DateTime The created `DateTime` object.
	 */
	public static function createDateTimeObject1(): DateTime
	{
		return self::$dateTimeObject1 ??= new DateTime( Values::DATETIME_STRING_1 );
	}

	/**
	 * Creates a `DateTime` object.
	 * @return DateTime The created `DateTime` object.
	 */
	public static function createDateTimeObject2(): DateTime
	{
		return self::$dateTimeObject2 ??= new DateTime( Values::DATETIME_STRING_2 );
	}

	/**
	 * Creates an array of `DateTime` objects.
	 * @return DateTime[] The created array of `DateTime` objects.
	 */
	public static function createDateTimeObjectArray1(): array
	{
		return [
			static::createDateTimeObject1(),
			static::createDateTimeObject1()
		];
	}

	/**
	 * Creates an array of `DateTime` objects.
	 * @return DateTime[] The created array of `DateTime` objects.
	 */
	public static function createDateTimeObjectArray2(): array
	{
		return [
			static::createDateTimeObject2(),
			static::createDateTimeObject2()
		];
	}

	/**
	 * Creates an array of mixed `DateTime` objects.
	 * @return DateTime[] The created array of mixed `DateTime` objects.
	 */
	public static function createDateTimeObjectMixedArray1(): array
	{
		return [
			static::createDateTimeObject1(),
			static::createDateTimeObject2()
		];
	}

	/**
	 * Creates an array of mixed `DateTime` objects.
	 * @return DateTime[] The created array of mixed `DateTime` objects.
	 */
	public static function createDateTimeObjectMixedArray2(): array
	{
		return [
			static::createDateTimeObject2(),
			static::createDateTimeObject1()
		];
	}

	/**
	 * Creates a `DateTimeZone` object.
	 * @return DateTimeZone The created `DateTimeZone` object.
	 */
	public static function createDateTimeZoneObject1(): DateTimeZone
	{
		return self::$dateTimeZoneObject1 ??= new DateTimeZone( Values::DATETIMEZONE_STRING_1 );
	}

	/**
	 * Creates a `DateTimeZone` object.
	 * @return DateTimeZone The created `DateTimeZone` object.
	 */
	public static function createDateTimeZoneObject2(): DateTimeZone
	{
		return self::$dateTimeZoneObject2 ??= new DateTimeZone( Values::DATETIMEZONE_STRING_2 );
	}

	/**
	 * Creates an array of `DateTimeZone` objects.
	 * @return DateTimeZone[] The created array of `DateTimeZone` objects.
	 */
	public static function createDateTimeZoneObjectArray1(): array
	{
		return [
			static::createDateTimeZoneObject1(),
			static::createDateTimeZoneObject1()
		];
	}

	/**
	 * Creates an array of `DateTimeZone` objects.
	 * @return DateTimeZone[] The created array of `DateTimeZone` objects.
	 */
	public static function createDateTimeZoneObjectArray2(): array
	{
		return [
			static::createDateTimeZoneObject2(),
			static::createDateTimeZoneObject2()
		];
	}

	/**
	 * Creates an array of mixed `DateTimeZone` objects.
	 * @return DateTimeZone[] The created array of mixed `DateTimeZone` objects.
	 */
	public static function createDateTimeZoneObjectMixedArray1(): array
	{
		return [
			static::createDateTimeZoneObject1(),
			static::createDateTimeZoneObject2()
		];
	}

	/**
	 * Creates an array of mixed `DateTimeZone` objects.
	 * @return DateTimeZone[] The created array of mixed `DateTimeZone` objects.
	 */
	public static function createDateTimeZoneObjectMixedArray2(): array
	{
		return [
			static::createDateTimeZoneObject2(),
			static::createDateTimeZoneObject1()
		];
	}

	/**
	 * Creates a `DateInterval` object.
	 * @return DateInterval The created `DateInterval` object.
	 */
	public static function createDateIntervalObject1(): DateInterval
	{
		return self::$dateIntervalObject1 ??= new DateInterval( Values::DATEINTERVAL_STRING_1 );
	}

	/**
	 * Creates a `DateInterval` object.
	 * @return DateInterval The created `DateInterval` object.
	 */
	public static function createDateIntervalObject2(): DateInterval
	{
		return self::$dateIntervalObject2 ??= new DateInterval( Values::DATEINTERVAL_STRING_2 );
	}

	/**
	 * Creates an array of `DateInterval` objects.
	 * @return DateInterval[] The created array of `DateInterval` objects.
	 */
	public static function createDateIntervalObjectArray1(): array
	{
		return [
			static::createDateIntervalObject1(),
			static::createDateIntervalObject1()
		];
	}

	/**
	 * Creates an array of `DateInterval` objects.
	 * @return DateInterval[] The created array of `DateInterval` objects.
	 */
	public static function createDateIntervalObjectArray2(): array
	{
		return [
			static::createDateIntervalObject2(),
			static::createDateIntervalObject2()
		];
	}

	/**
	 * Creates an array of mixed `DateInterval` objects.
	 * @return DateInterval[] The created array of mixed `DateInterval` objects.
	 */
	public static function createDateIntervalObjectMixedArray1(): array
	{
		return [
			static::createDateIntervalObject1(),
			static::createDateIntervalObject2()
		];
	}

	/**
	 * Creates an array of mixed `DateInterval` objects.
	 * @return DateInterval[] The created array of mixed `DateInterval` objects.
	 */
	public static function createDateIntervalObjectMixedArray2(): array
	{
		return [
			static::createDateIntervalObject2(),
			static::createDateIntervalObject1()
		];
	}

	/**
	 * Creates a concrete interface object.
	 * @return ConcreteInterfaceFixture1 The created concrete interface object.
	 */
	public static function createConcreteInterfaceFixture1(): ConcreteInterfaceFixture1
	{
		return self::$concreteInterfaceFixture1 ??= new ( static::CONCRETE_INTERFACE_NAME_1 )();
	}

	/**
	 * Creates a concrete interface object.
	 * @return ConcreteInterfaceFixture2 The created concrete interface object.
	 */
	public static function createConcreteInterfaceFixture2(): ConcreteInterfaceFixture2
	{
		return self::$concreteInterfaceFixture2 ??= new ( static::CONCRETE_INTERFACE_NAME_2 )();
	}

	/**
	 * Creates an array of concrete interface fixtures.
	 * @return ConcreteInterfaceFixture1[] The created array of concrete interface fixtures.
	 */
	public static function createConcreteInterfaceFixtureArray1(): array
	{
		return [
			static::createConcreteInterfaceFixture1(),
			static::createConcreteInterfaceFixture1()
		];
	}

	/**
	 * Creates an array of concrete interface fixtures.
	 * @return ConcreteInterfaceFixture2[] The created array of concrete interface fixtures.
	 */
	public static function createConcreteInterfaceFixtureArray2(): array
	{
		return [
			static::createConcreteInterfaceFixture2(),
			static::createConcreteInterfaceFixture2()
		];
	}

	/**
	 * Creates an array of mixed concrete interface fixtures.
	 * @return object[] The created array of mixed concrete interface fixtures.
	 */
	public static function createConcreteInterfaceFixtureMixedArray1(): array
	{
		return [
			static::createConcreteInterfaceFixture1(),
			static::createConcreteInterfaceFixture2()
		];
	}

	/**
	 * Creates an array of mixed concrete interface fixtures.
	 * @return object[] The created array of mixed concrete interface fixtures.
	 */
	public static function createConcreteInterfaceFixtureMixedArray2(): array
	{
		return [
			static::createConcreteInterfaceFixture2(),
			static::createConcreteInterfaceFixture1()
		];
	}

	/**
	 * Creates a class fixture object.
	 * @return ClassFixture1 The created class fixture object.
	 */
	public static function createClassFixture1(): ClassFixture1
	{
		return self::$classFixture1 ??= new ( static::CLASS_NAME_1 )();
	}

	/**
	 * Creates a class fixture object.
	 * @return ClassFixture2 The created class fixture object.
	 */
	public static function createClassFixture2(): ClassFixture2
	{
		return self::$classFixture2 ??= new ( static::CLASS_NAME_2 )();
	}

	/**
	 * Creates an array of class fixtures.
	 * @return ClassFixture1[] The created array of class fixtures.
	 */
	public static function createClassFixtureArray1(): array
	{
		return [
			static::createClassFixture1(),
			static::createClassFixture1()
		];
	}

	/**
	 * Creates an array of class fixtures.
	 * @return ClassFixture2[] The created array of class fixtures.
	 */
	public static function createClassFixtureArray2(): array
	{
		return [
			static::createClassFixture2(),
			static::createClassFixture2()
		];
	}

	/**
	 * Creates an array of mixed class fixtures.
	 * @return object[] The created array of mixed class fixtures.
	 */
	public static function createClassFixtureMixedArray1(): array
	{
		return [
			static::createClassFixture1(),
			static::createClassFixture2()
		];
	}

	/**
	 * Creates an array of mixed class fixtures.
	 * @return object[] The created array of mixed class fixtures.
	 */
	public static function createClassFixtureMixedArray2(): array
	{
		return [
			static::createClassFixture2(),
			static::createClassFixture1()
		];
	}

	/**
	 * Create an array of mixed values.
	 * @return mixed[] The created array of mixed values.
	 */
	public static function createMixedValuesArray1(): array
	{
		return [
			static::NULL,
			static::NULL_ARRAY,
			static::NULL_STRING,
			static::NULL_STRING_ARRAY,
			static::EMPTY_STRING,
			static::BOOLEAN_FALSE,
			static::BOOLEAN_TRUE,
			static::BOOLEAN_ARRAY_1,
			static::BOOLEAN_MIXED_ARRAY_1,
			static::BOOLEAN_INTEGER_FALSE,
			static::BOOLEAN_INTEGER_TRUE,
			static::BOOLEAN_INTEGER_ARRAY_1,
			static::BOOLEAN_INTEGER_MIXED_ARRAY_1,
			static::BOOLEAN_INTEGER_STRING_FALSE,
			static::BOOLEAN_INTEGER_STRING_TRUE,
			static::BOOLEAN_INTEGER_STRING_ARRAY_1,
			static::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
			static::BOOLEAN_STRING_FALSE,
			static::BOOLEAN_STRING_TRUE,
			static::BOOLEAN_STRING_ARRAY_1,
			static::BOOLEAN_STRING_MIXED_ARRAY_1,
			static::BINARY_STRING_24,
			static::BINARY_STRING_ARRAY_1,
			static::BINARY_STRING_MIXED_ARRAY_1,
			static::INTEGER_24,
			static::INTEGER_ARRAY_1,
			static::INTEGER_MIXED_ARRAY_1,
			static::INTEGER_STRING_24,
			static::INTEGER_STRING_ARRAY_1,
			static::INTEGER_STRING_MIXED_ARRAY_1,
			static::FLOAT_24,
			static::FLOAT_ARRAY_1,
			static::FLOAT_MIXED_ARRAY_1,
			static::FLOAT_STRING_24,
			static::FLOAT_STRING_ARRAY_1,
			static::FLOAT_STRING_MIXED_ARRAY_1,
			static::DATETIME_STRING_1,
			static::DATETIME_STRING_ARRAY_1,
			static::DATETIME_STRING_MIXED_ARRAY_1,
			static::DATETIME_FORMAT_1,
			static::DATETIMEZONE_STRING_1,
			static::DATETIMEZONE_STRING_ARRAY_1,
			static::DATETIMEZONE_STRING_MIXED_ARRAY_1,
			static::DATEINTERVAL_STRING_1,
			static::DATEINTERVAL_STRING_ARRAY_1,
			static::DATEINTERVAL_STRING_MIXED_ARRAY_1,
			static::ENUM_1,
			static::ENUM_ARRAY_1,
			static::ENUM_MIXED_ARRAY_1,
			static::ENUM_NAME_1,
			static::ENUM_NAME_ARRAY_1,
			static::ENUM_NAME_MIXED_ARRAY_1,
			static::INTEGER_BACKED_ENUM_1,
			static::INTEGER_BACKED_ENUM_ARRAY_1,
			static::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
			static::INTEGER_BACKED_ENUM_NAME_1,
			static::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
			static::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
			static::STRING_BACKED_ENUM_1,
			static::STRING_BACKED_ENUM_ARRAY_1,
			static::STRING_BACKED_ENUM_MIXED_ARRAY_1,
			static::STRING_BACKED_ENUM_NAME_1,
			static::STRING_BACKED_ENUM_NAME_ARRAY_1,
			static::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
			static::NONEXISTENT_ENUM_NAME_1,
			static::INTERFACE_NAME_1,
			static::INTERFACE_NAME_ARRAY_1,
			static::INTERFACE_NAME_MIXED_ARRAY_1,
			static::CONCRETE_INTERFACE_NAME_1,
			static::CONCRETE_INTERFACE_NAME_ARRAY_1,
			static::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
			static::NONEXISTENT_INTERFACE_NAME_1,
			static::CLASS_NAME_1,
			static::CLASS_NAME_ARRAY_1,
			static::CLASS_NAME_MIXED_ARRAY_1,
			static::NONEXISTENT_CLASS_NAME_1,
			static::TRAIT_NAME_1,
			static::TRAIT_NAME_ARRAY_1,
			static::TRAIT_NAME_MIXED_ARRAY_1,
			static::NONEXISTENT_TRAIT_NAME_1,
			static::INTERFACE_OR_CLASS_NAME_ARRAY_1,
			static::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
			static::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
			static::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
			static::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
			static::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
			static::REG_EX_BINARY_STRING,
			static::REG_EX_INTEGER_STRING,
			static::REG_EX_FLOAT_STRING,
			static::REG_EX_ARRAY,
			static::INVALID_REG_EX_1,
			static::createDateTimeImmutableObject1(),
			static::createDateTimeImmutableObjectArray1(),
			static::createDateTimeImmutableObjectMixedArray1(),
			static::createDateTimeObject1(),
			static::createDateTimeObjectArray1(),
			static::createDateTimeObjectMixedArray1(),
			static::createDateTimeZoneObject1(),
			static::createDateTimeZoneObjectArray1(),
			static::createDateTimeZoneObjectMixedArray1(),
			static::createDateIntervalObject1(),
			static::createDateIntervalObjectArray1(),
			static::createDateIntervalObjectMixedArray1(),
			static::createConcreteInterfaceFixture1(),
			static::createConcreteInterfaceFixtureArray1(),
			static::createConcreteInterfaceFixtureMixedArray1(),
			static::createClassFixture1(),
			static::createClassFixtureArray1(),
			static::createClassFixtureMixedArray1()
		];
	}

	/**
	 * Create an array of mixed values.
	 * @return mixed[] The created array of mixed values.
	 */
	public static function createMixedValuesArray2(): array
	{
		return [
			static::NULL,
			static::NULL_ARRAY,
			static::NULL_STRING,
			static::NULL_STRING_ARRAY,
			static::EMPTY_STRING,
			static::BOOLEAN_FALSE,
			static::BOOLEAN_TRUE,
			static::BOOLEAN_ARRAY_2,
			static::BOOLEAN_MIXED_ARRAY_2,
			static::BOOLEAN_INTEGER_FALSE,
			static::BOOLEAN_INTEGER_TRUE,
			static::BOOLEAN_INTEGER_ARRAY_2,
			static::BOOLEAN_INTEGER_MIXED_ARRAY_2,
			static::BOOLEAN_INTEGER_STRING_FALSE,
			static::BOOLEAN_INTEGER_STRING_TRUE,
			static::BOOLEAN_INTEGER_STRING_ARRAY_2,
			static::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
			static::BOOLEAN_STRING_FALSE,
			static::BOOLEAN_STRING_TRUE,
			static::BOOLEAN_STRING_ARRAY_2,
			static::BOOLEAN_STRING_MIXED_ARRAY_2,
			static::BINARY_STRING_42,
			static::BINARY_STRING_ARRAY_2,
			static::BINARY_STRING_MIXED_ARRAY_2,
			static::INTEGER_42,
			static::INTEGER_ARRAY_2,
			static::INTEGER_MIXED_ARRAY_2,
			static::INTEGER_STRING_42,
			static::INTEGER_STRING_ARRAY_2,
			static::INTEGER_STRING_MIXED_ARRAY_2,
			static::FLOAT_42,
			static::FLOAT_ARRAY_2,
			static::FLOAT_MIXED_ARRAY_2,
			static::FLOAT_STRING_42,
			static::FLOAT_STRING_ARRAY_2,
			static::FLOAT_STRING_MIXED_ARRAY_2,
			static::DATETIME_STRING_2,
			static::DATETIME_STRING_ARRAY_2,
			static::DATETIME_STRING_MIXED_ARRAY_2,
			static::DATETIME_FORMAT_2,
			static::DATETIMEZONE_STRING_2,
			static::DATETIMEZONE_STRING_ARRAY_2,
			static::DATETIMEZONE_STRING_MIXED_ARRAY_2,
			static::DATEINTERVAL_STRING_2,
			static::DATEINTERVAL_STRING_ARRAY_2,
			static::DATEINTERVAL_STRING_MIXED_ARRAY_2,
			static::ENUM_2,
			static::ENUM_ARRAY_2,
			static::ENUM_MIXED_ARRAY_2,
			static::ENUM_NAME_2,
			static::ENUM_NAME_ARRAY_2,
			static::ENUM_NAME_MIXED_ARRAY_2,
			static::INTEGER_BACKED_ENUM_2,
			static::INTEGER_BACKED_ENUM_ARRAY_2,
			static::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
			static::INTEGER_BACKED_ENUM_NAME_2,
			static::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
			static::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
			static::STRING_BACKED_ENUM_2,
			static::STRING_BACKED_ENUM_ARRAY_2,
			static::STRING_BACKED_ENUM_MIXED_ARRAY_2,
			static::STRING_BACKED_ENUM_NAME_2,
			static::STRING_BACKED_ENUM_NAME_ARRAY_2,
			static::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
			static::NONEXISTENT_ENUM_NAME_2,
			static::INTERFACE_NAME_2,
			static::INTERFACE_NAME_ARRAY_2,
			static::INTERFACE_NAME_MIXED_ARRAY_2,
			static::CONCRETE_INTERFACE_NAME_2,
			static::CONCRETE_INTERFACE_NAME_ARRAY_2,
			static::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
			static::NONEXISTENT_INTERFACE_NAME_2,
			static::CLASS_NAME_2,
			static::CLASS_NAME_ARRAY_2,
			static::CLASS_NAME_MIXED_ARRAY_2,
			static::NONEXISTENT_CLASS_NAME_2,
			static::TRAIT_NAME_2,
			static::TRAIT_NAME_ARRAY_2,
			static::TRAIT_NAME_MIXED_ARRAY_2,
			static::NONEXISTENT_TRAIT_NAME_2,
			static::INTERFACE_OR_CLASS_NAME_ARRAY_2,
			static::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
			static::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
			static::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
			static::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
			static::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
			static::REG_EX_BINARY_STRING,
			static::REG_EX_INTEGER_STRING,
			static::REG_EX_FLOAT_STRING,
			static::REG_EX_ARRAY,
			static::INVALID_REG_EX_2,
			static::createDateTimeImmutableObject2(),
			static::createDateTimeImmutableObjectArray2(),
			static::createDateTimeImmutableObjectMixedArray2(),
			static::createDateTimeObject2(),
			static::createDateTimeObjectArray2(),
			static::createDateTimeObjectMixedArray2(),
			static::createDateTimeZoneObject2(),
			static::createDateTimeZoneObjectArray2(),
			static::createDateTimeZoneObjectMixedArray2(),
			static::createDateIntervalObject2(),
			static::createDateIntervalObjectArray2(),
			static::createDateIntervalObjectMixedArray2(),
			static::createConcreteInterfaceFixture2(),
			static::createConcreteInterfaceFixtureArray2(),
			static::createConcreteInterfaceFixtureMixedArray2(),
			static::createClassFixture2(),
			static::createClassFixtureArray2(),
			static::createClassFixtureMixedArray2()
		];
	}

	/**
	 * Create an array of mapped values.
	 * @return mixed[] The created array of mapped values.
	 */
	public static function createMappedArray1(): array
	{
		return [
			static::VALIDATOR_MAPPING_KEY_1 => static::NULL,
			static::VALIDATOR_MAPPING_KEY_2 => static::NULL_ARRAY,
			static::VALIDATOR_MAPPING_KEY_3 => static::NULL_STRING
		];
	}

	/**
	 * Create an array of mapped values.
	 * @return mixed[] The created array of mapped values.
	 */
	public static function createMappedArray2(): array
	{
		return [
			static::VALIDATOR_MAPPING_KEY_1 => static::NULL,
			static::VALIDATOR_MAPPING_KEY_2 => static::NULL_ARRAY,
			static::VALIDATOR_MAPPING_KEY_3 => static::BOOLEAN_FALSE,
			static::VALIDATOR_MAPPING_KEY_4 => static::BOOLEAN_INTEGER_FALSE
		];
	}

	/**
	 * Create an object of mapped properties.
	 * @return MappedObjectFixture1 The created object of mapped properties.
	 */
	public static function createMappedObject1(): object
	{
		return new MappedObjectFixture1();
	}

	/**
	 * Create an object of mapped properties.
	 * @return MappedObjectFixture1 The created object of mapped properties.
	 */
	public static function createMappedObject2(): object
	{
		return new MappedObjectFixture2();
	}

	/**
	 * Creates a validator implementing `ValidatorInterface`.
	 * @return ValidatorInterface The created validator.
	 */
	public static function createValidator(): ValidatorInterface
	{
		return new ValidatorFixture();
	}

	/**
	 * Creates an `IsNullValidator`.
	 * @return ValidatorInterface The created `IsNullValidator` validator.
	 */
	public static function createIsNullValidator(): ValidatorInterface
	{
		return new IsNullValidator();
	}

	/**
	 * Creates an `IsArrayValidator`.
	 * @return ValidatorInterface The created `IsArrayValidator` validator.
	 */
	public static function createIsArrayValidator(): ValidatorInterface
	{
		return new IsArrayValidator();
	}

	/**
	 * Creates an `IsStringValidator`.
	 * @return ValidatorInterface The created `IsStringValidator` validator.
	 */
	public static function createIsStringValidator(): ValidatorInterface
	{
		return new IsStringValidator();
	}

	/**
	 * Creates an `IsBooleanIntegerStringValidator`.
	 * @return ValidatorInterface The created `IsBooleanIntegerStringValidator` validator.
	 */
	public static function createIsBooleanIntegerStringValidator(): ValidatorInterface
	{
		return new IsBooleanIntegerStringValidator();
	}

	/**
	 * Creates an `IsBinaryStringValidator`.
	 * @return ValidatorInterface The created `IsBinaryStringValidator` validator.
	 */
	public static function createIsBinaryStringValidator(): ValidatorInterface
	{
		return new IsBinaryStringValidator();
	}

	/**
	 * Creates an array of empty validator mappings.
	 * @return ValidatorMappingInterface[] The array of created empty validator mappings.
	 */
	public static function createEmptyValidatorMappings(): array
	{
		return [];
	}

	/**
	 * Creates an array of validator mappings.
	 * @return ValidatorMappingInterface[] The array of created validator mappings.
	 */
	public static function createValidatorMappings(): array
	{
		return [
			new ValidatorMapping(
				static::VALIDATOR_MAPPING_KEY_1,
				static::createIsNullValidator()
			),
			new ValidatorMapping(
				static::VALIDATOR_MAPPING_KEY_2,
				static::createIsArrayValidator()
			),
			new ValidatorMapping(
				static::VALIDATOR_MAPPING_KEY_3,
				static::createIsStringValidator()
			)
		];
	}

	/**
	 * Creates an array of validator mappings with an unknown key.
	 * @return ValidatorMappingInterface[] The array of created validator mappings with an unknown key.
	 */
	public static function createValidatorMappingsWithUnknownKey(): array
	{
		return [
			new ValidatorMapping(
				static::VALIDATOR_MAPPING_KEY_1,
				static::createIsNullValidator()
			),
			new ValidatorMapping(
				static::VALIDATOR_MAPPING_KEY_2,
				static::createIsArrayValidator()
			),
			new ValidatorMapping(
				static::VALIDATOR_MAPPING_KEY_3,
				static::createIsStringValidator()
			),
			new ValidatorMapping(
				static::UNKNOWN_VALIDATOR_MAPPING_KEY,
				static::createIsNullValidator()
			)
		];
	}

	/**
	 * Creates an array of validator mappings with a duplicate key.
	 * @return ValidatorMappingInterface[] The array of created validator mappings with a duplicate key.
	 */
	public static function createValidatorMappingsWithDuplicateKey(): array
	{
		return [
			new ValidatorMapping(
				static::VALIDATOR_MAPPING_KEY_1,
				static::createIsNullValidator()
			),
			new ValidatorMapping(
				static::VALIDATOR_MAPPING_KEY_2,
				static::createIsArrayValidator()
			),
			new ValidatorMapping(
				static::VALIDATOR_MAPPING_KEY_3,
				static::createIsStringValidator()
			),
			new ValidatorMapping(
				static::VALIDATOR_MAPPING_KEY_3,
				static::createIsStringValidator()
			)
		];
	}

	/**
	 * Creates an array of empty validators.
	 * @return ValidatorInterface[] The array of created empty validators.
	 */
	public static function createEmptyValidators(): array
	{
		return [];
	}

	/**
	 * Creates an array of validators.
	 * @return ValidatorInterface[] The array of created validators.
	 */
	public static function createValidators(): array
	{
		return [
			static::createIsStringValidator(),
			static::createIsBinaryStringValidator(),
			static::createIsBooleanIntegerStringValidator()
		];
	}

	/**
	 * Creates an array of validators with a duplicate validator.
	 * @return ValidatorInterface[] The array of created validators with a duplicate validator.
	 */
	public static function createValidatorsWithDuplicateValidator(): array
	{
		return [
			static::createIsStringValidator(),
			static::createIsBinaryStringValidator(),
			static::createIsBooleanIntegerStringValidator(),
			static::createIsStringValidator()
		];
	}
}
