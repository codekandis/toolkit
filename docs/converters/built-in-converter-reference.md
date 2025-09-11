# Converters - Built-in converter reference

## Index

* [`ValidValues`](#validvalues)
  * [`ValidValues::createDateTimeString`](#validvaluescreatedatetimestring)
    * [Definition](#definition)
    * [Examples](#examples)
* [Converters](#converters)
  * [Base converters](#base-converters)
  * [Concrete converters](#concrete-converters)
    * [Unidirectional converters](#unidirectional-converters)
    * [Bidirectional converters](#bidirectional-converters)

## [`ValidValues`][srclink-ValidValues]

Represents an enumeration of valid values.

### [`ValidValues::createDateTimeString()`][srclink-ValidValues-createDateTimeString]

Creates a `DateTime string` by a specific format.

#### Definition

```php
ValidValues::createDateTimeString( string $format ): string
```

* `$format` - The format to create the `DateTime string` from.

#### Examples

##### #1

```php
$format = 'Y-m-d H:i:s.u';

ValidValues::createDateTimeString( $format );
/**
 * string<datetime<Y-m-d H:i:s.u>>
 */
```

## Converters

### Base converters

* [`AbstractConverter`][srclink-AbstractConverter]

  Represents the base class of any converter.

* [`AbstractDateTimeRelatedConverter`][srclink-AbstractDateTimeRelatedConverter]

  Represents the base class of any `DateTime` related converter.

* [`AbstractBiDirectionalConverter`][srclink-AbstractBiDirectionalConverter]

  Represents the base class of any bidirectional converter.

* [`AbstractBiDirectionalConverterTrait`][srclink-AbstractBiDirectionalConverterTrait]

  Represents the trait of any bidirectional converter.

* [`AbstractDateTimeRelatedBiDirectionalConverter`][srclink-AbstractDateTimeRelatedBiDirectionalConverter]

  Represents the base class of any `DateTime` related bidirectional converter.

### Concrete converters

#### Unidirectional converters

* [`BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter]

  Represents a unidirectional converter converting a `backed enum` into an `array` of corresponding key value pairs.

* [`BinaryStringToBooleanArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-BinaryStringToBooleanArrayUniDirectionalConverter]

  Represents a unidirectional converter converting a `binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString] into its corresponding `boolean array` containing only values equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue].

* [`BinaryStringToIntegerUniDirectionalConverter`][srclink-UniDirectionalConverters-BinaryStringToIntegerUniDirectionalConverter]

  Represents a unidirectional converter converting a `binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString] into its corresponding `integer` value.

* [`BooleanArrayToBinaryStringUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanArrayToBinaryStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `boolean array` containing only values equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString].

* [`BooleanIntegerStringToBooleanUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanIntegerStringToBooleanUniDirectionalConverter]

  Represents a unidirectional converter converting a `boolean integer string` value matching the regular expression [`ValidValues::$regExBooleanIntegerString`][srclink-ValidValues-regExBooleanIntegerString] into its corresponding `boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue].

* [`BooleanIntegerToBooleanUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanIntegerToBooleanUniDirectionalConverter]

  Represents a unidirectional converter converting a `boolean integer` value equal to [`ValidValues::$booleanIntegerFalse`][srclink-ValidValues-booleanIntegerFalse] or [`ValidValues::$booleanIntegerTrue`][srclink-ValidValues-booleanIntegerTrue] into its corresponding `boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue].

* [`BooleanStringToBooleanUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanStringToBooleanUniDirectionalConverter]

  Represents a unidirectional converter converting a `boolean string` value matching the regular expression [`ValidValues::$regExBooleanString`][srclink-ValidValues-regExBooleanString] into its corresponding `boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue].

* [`BooleanToBooleanIntegerStringUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanToBooleanIntegerStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `boolean integer string` value matching the regular expression [`ValidValues::$regExBooleanIntegerString`][srclink-ValidValues-regExBooleanIntegerString].

* [`BooleanToBooleanIntegerUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanToBooleanIntegerUniDirectionalConverter]

  Represents a unidirectional converter converting a `boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `boolean integer` value equal to [`ValidValues::$booleanIntegerFalse`][srclink-ValidValues-booleanIntegerFalse] or [`ValidValues::$booleanIntegerTrue`][srclink-ValidValues-booleanIntegerTrue].

* [`BooleanToBooleanStringUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanToBooleanStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `boolean string` value matching the regular expression [`ValidValues::$regExBooleanString`][srclink-ValidValues-regExBooleanString].

* [`DateTimeImmutableToDateTimeStringUniDirectionalConverter`][srclink-UniDirectionalConverters-DateTimeImmutableToDateTimeStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `DateTimeImmutable` value into its corresponding `DateTime string` value depending on a given format.

* [`DateTimeStringToDateTimeImmutableUniDirectionalConverter`][srclink-UniDirectionalConverters-DateTimeStringToDateTimeImmutableUniDirectionalConverter]

  Represents a unidirectional converter converting a `DateTime string` value into its corresponding `DateTimeImmutable` value depending on a given format.

* [`DateTimeStringToDateTimeUniDirectionalConverter`][srclink-UniDirectionalConverters-DateTimeStringToDateTimeUniDirectionalConverter]

  Represents a unidirectional converter converting a `DateTime string` value into its corresponding `DateTime` value depending on a given format.

* [`DateTimeToDateTimeStringUniDirectionalConverter`][srclink-UniDirectionalConverters-DateTimeToDateTimeStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `DateTime` value into its corresponding `DateTime string` value depending on a given format.

* [`EnumValuesToKeysArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-EnumValuesToKeysArrayUniDirectionalConverter]

  Represents a unidirectional converter converting an `enum` into an `array` of corresponding keys.

* [`FloatStringToFloatUniDirectionalConverter`][srclink-UniDirectionalConverters-FloatStringToFloatUniDirectionalConverter]

  Represents a unidirectional converter converting a `float string` value matching the regular expression [`ValidValues::$regExFloatString`][srclink-ValidValues-regExFloatString] into its corresponding `float` value.

* [`FloatToFloatStringUniDirectionalConverter`][srclink-UniDirectionalConverters-FloatToFloatStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `float` value into its corresponding `float string` value matching the regular expression [`ValidValues::$regExFloatString`][srclink-ValidValues-regExFloatString].

* [`IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter]

  Represents a unidirectional converter converting an `integer backed enum` into an `array` of corresponding key value pairs.

* [`IntegerStringToIntegerUniDirectionalConverter`][srclink-UniDirectionalConverters-IntegerStringToIntegerUniDirectionalConverter]

  Represents a unidirectional converter converting an `integer string` value matching the regular expression [`ValidValues::$regExIntegerString`][srclink-ValidValues-regExIntegerString] into its corresponding `integer` value.

* [`IntegerToBinaryStringUniDirectionalConverter`][srclink-UniDirectionalConverters-IntegerToBinaryStringUniDirectionalConverter]

  Represents a unidirectional converter converting an `integer` value into its corresponding `binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString].

* [`IntegerToIntegerStringUniDirectionalConverter`][srclink-UniDirectionalConverters-IntegerToIntegerStringUniDirectionalConverter]

  Represents a unidirectional converter converting an `integer` value into its corresponding `integer string` value matching the regular expression [`ValidValues::$regExIntegerString`][srclink-ValidValues-regExIntegerString].

* [`NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable backed enum` into a `nullable array` of corresponding key value pairs.

* [`NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString] into its corresponding `nullable boolean array` containing only values equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue].

* [`NullableBinaryStringToNullableIntegerUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBinaryStringToNullableIntegerUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString] into its corresponding `nullable integer` value.

* [`NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable boolean array` containing only values equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `nullable binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString].

* [`NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable boolean integer string` value matching the regular expression [`ValidValues::$regExBooleanIntegerString`][srclink-ValidValues-regExBooleanIntegerString] into its corresponding `nullable boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue].

* [`NullableBooleanIntegerToNullableBooleanUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanIntegerToNullableBooleanUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable boolean integer` value equal to [`ValidValues::$booleanIntegerFalse`][srclink-ValidValues-booleanIntegerFalse] or [`ValidValues::$booleanIntegerTrue`][srclink-ValidValues-booleanIntegerTrue] into its corresponding `nullable boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue].

* [`NullableBooleanStringToNullableBooleanUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanStringToNullableBooleanUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable boolean string` value matching the regular expression [`ValidValues::$regExBooleanString`][srclink-ValidValues-regExBooleanString] into its corresponding `nullable boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue].

* [`NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `nullable boolean integer string` value matching the regular expression [`ValidValues::$regExBooleanIntegerString`][srclink-ValidValues-regExBooleanIntegerString].

* [`NullableBooleanToNullableBooleanIntegerUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanToNullableBooleanIntegerUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `nullable boolean integer` value equal to [`ValidValues::$booleanIntegerFalse`][srclink-ValidValues-booleanIntegerFalse] or [`ValidValues::$booleanIntegerTrue`][srclink-ValidValues-booleanIntegerTrue].

* [`NullableBooleanToNullableBooleanStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanToNullableBooleanStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `nullable boolean string` value matching the regular expression [`ValidValues::$regExBooleanString`][srclink-ValidValues-regExBooleanString].

* [`NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable DateTimeImmutable` value into its corresponding `nullable DateTime string` value depending on a given format.

* [`NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable DateTime string` value into its corresponding `nullable DateTimeImmutable` value depending on a given format.

* [`NullableDateTimeStringToNullableDateTimeUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableDateTimeStringToNullableDateTimeUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable DateTime string` value into its corresponding `nullable DateTime` value depending on a given format.

* [`NullableDateTimeToNullableDateTimeStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableDateTimeToNullableDateTimeStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable DateTime` value into its corresponding `nullable DateTime string` value depending on a given format.

* [`NullableEnumValuesToNullableKeysArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableEnumValuesToNullableKeysArrayUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable enum` into a `nullable array` of corresponding stringified keys.

* [`NullableFloatStringToNullableFloatUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableFloatStringToNullableFloatUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable float string` value matching the regular expression [`ValidValues::$regExFloatString`][srclink-ValidValues-regExFloatString] into its corresponding `nullable float` value.

* [`NullableFloatToNullableFloatStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableFloatToNullableFloatStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable float` value into its corresponding `nullable float string` value matching the regular expression [`ValidValues::$regExFloatString`][srclink-ValidValues-regExFloatString].

* [`NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable integer backed enum` into a `nullable array` of corresponding key value pairs.

* [`NullableIntegerStringToNullableIntegerUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableIntegerStringToNullableIntegerUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable integer string` value matching the regular expression [`ValidValues::$regExIntegerString`][srclink-ValidValues-regExIntegerString] into its corresponding `nullable integer` value.

* [`NullableIntegerToNullableBinaryStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableIntegerToNullableBinaryStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable integer` value into its corresponding `nullable binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString].

* [`NullableIntegerToNullableIntegerStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableIntegerToNullableIntegerStringUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable integer` value into its corresponding `nullable integer string` value matching the regular expression [`ValidValues::$regExIntegerString`][srclink-ValidValues-regExIntegerString].

* [`NullableNullStringToNullUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableNullStringToNullUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable string` value matching [`ValidValues::$nullString`][srclink-ValidValues-nullString] into a value matching [`ValidValues::$null`][srclink-ValidValues-null].

* [`NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter]

  Represents a unidirectional converter converting a `nullable string backed enum` into a `nullable array` of corresponding key value pairs.

* [`NullStringToNullUniDirectionalConverter`][srclink-UniDirectionalConverters-NullStringToNullUniDirectionalConverter]

  Represents a unidirectional converter converting a `string` value equal to [`ValidValues::$nullString`][srclink-ValidValues-nullString] into a value equal to [`ValidValues::$null`][srclink-ValidValues-null].

* [`NullToNullStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullToNullStringUniDirectionalConverter]

  Represents a unidirectional converter converting a value equal to [`ValidValues::$null`][srclink-ValidValues-null] into a `string` value equal to [`ValidValues::$nullString`][srclink-ValidValues-nullString].

* [`StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter]

  Represents a unidirectional converter converting a `string backed enum` into an `array` of corresponding key value pairs.

#### Bidirectional converters

* [`BinaryStringToBooleanArrayBiDirectionalConverter`][srclink-BiDirectionalConverters-BinaryStringToBooleanArrayBiDirectionalConverter]

  Represents a bidirectional converter converting a `binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString] into its corresponding `boolean array` containing only values equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] - and vice versa.

* [`BinaryStringToIntegerBiDirectionalConverter`][srclink-BiDirectionalConverters-BinaryStringToIntegerBiDirectionalConverter]

  Represents a bidirectional converter converting a `binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString] into its corresponding `integer` value - and vice versa.

* [`BooleanArrayToBinaryStringBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanArrayToBinaryStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `boolean array` containing only values equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString] - and vice versa.

* [`BooleanIntegerStringToBooleanBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanIntegerStringToBooleanBiDirectionalConverter]

  Represents a bidirectional converter converting a `boolean integer string` value matching the regular expression [`ValidValues::$regExBooleanIntegerString`][srclink-ValidValues-regExBooleanIntegerString] into its corresponding `boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] - and vice versa.

* [`BooleanIntegerToBooleanBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanIntegerToBooleanBiDirectionalConverter]

  Represents a bidirectional converter converting a `boolean integer` value equal to [`ValidValues::$booleanIntegerFalse`][srclink-ValidValues-booleanIntegerFalse] or [`ValidValues::$booleanIntegerTrue`][srclink-ValidValues-booleanIntegerTrue] into its corresponding `boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] - and vice versa.

* [`BooleanStringToBooleanBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanStringToBooleanBiDirectionalConverter]

  Represents a bidirectional converter converting a `boolean string` value matching the regular expression [`ValidValues::$regExBooleanString`][srclink-ValidValues-regExBooleanString] into its corresponding `boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] - and vice versa.

* [`BooleanToBooleanIntegerBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanToBooleanIntegerBiDirectionalConverter]

  Represents a bidirectional converter converting a `boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `boolean integer` value equal to [`ValidValues::$booleanIntegerFalse`][srclink-ValidValues-booleanIntegerFalse] or [`ValidValues::$booleanIntegerTrue`][srclink-ValidValues-booleanIntegerTrue] - and vice versa.

* [`BooleanToBooleanIntegerStringBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanToBooleanIntegerStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `boolean integer string` value matching the regular expression [`ValidValues::$regExBooleanIntegerString`][srclink-ValidValues-regExBooleanIntegerString] - and vice versa.

* [`BooleanToBooleanStringBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanToBooleanStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `boolean string` value matching the regular expression [`ValidValues::$regExBooleanString`][srclink-ValidValues-regExBooleanString] - and vice versa.

* [`DateTimeImmutableToDateTimeStringBiDirectionalConverter`][srclink-BiDirectionalConverters-DateTimeImmutableToDateTimeStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `DateTimeImmutable` value into its corresponding `DateTime string` value depending on a given format - and vice versa.

* [`DateTimeStringToDateTimeBiDirectionalConverter`][srclink-BiDirectionalConverters-DateTimeStringToDateTimeBiDirectionalConverter]

  Represents a bidirectional converter converting a `DateTime string` value into its corresponding `DateTime` value depending on a given format - and vice versa.

* [`DateTimeStringToDateTimeImmutableBiDirectionalConverter`][srclink-BiDirectionalConverters-DateTimeStringToDateTimeImmutableBiDirectionalConverter]

  Represents a bidirectional converter converting a `DateTime string` value into its corresponding `DateTimeImmutable` value depending on a given format - and vice versa.

* [`DateTimeToDateTimeStringBiDirectionalConverter`][srclink-BiDirectionalConverters-DateTimeToDateTimeStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `DateTime` value into its corresponding `DateTime string` value depending on a given format - and vice versa.

* [`FloatStringToFloatBiDirectionalConverter`][srclink-BiDirectionalConverters-FloatStringToFloatBiDirectionalConverter]

  Represents a bidirectional converter converting a `float string` value matching the regular expression [`ValidValues::$regExFloatString`][srclink-ValidValues-regExFloatString] into its corresponding `float` value - and vice versa.

* [`FloatToFloatStringBiDirectionalConverter`][srclink-BiDirectionalConverters-FloatToFloatStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `float` value into its corresponding `float string` value matching the regular expression [`ValidValues::$regExFloatString`][srclink-ValidValues-regExFloatString] - and vice versa.

* [`IntegerStringToIntegerBiDirectionalConverter`][srclink-BiDirectionalConverters-IntegerStringToIntegerBiDirectionalConverter]

  Represents a bidirectional converter converting an `integer string` value matching the regular expression [`ValidValues::$regExIntegerString`][srclink-ValidValues-regExIntegerString] into its corresponding `integer` value - and vice versa.

* [`IntegerToBinaryStringBiDirectionalConverter`][srclink-BiDirectionalConverters-IntegerToBinaryStringBiDirectionalConverter]

  Represents a bidirectional converter converting an `integer` value into its corresponding `binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString] - and vice versa.

* [`IntegerToIntegerStringBiDirectionalConverter`][srclink-BiDirectionalConverters-IntegerToIntegerStringBiDirectionalConverter]

  Represents a bidirectional converter converting an `integer` value into its corresponding `integer string` value matching the regular expression [`ValidValues::$regExIntegerString`][srclink-ValidValues-regExIntegerString] - and vice versa.

* [`NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString] into its corresponding `nullable boolean array` containing only values equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] - and vice versa.

* [`NullableBinaryStringToNullableIntegerBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBinaryStringToNullableIntegerBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString] into its corresponding `nullable integer` value - and vice versa.

* [`NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable boolean array` containing only values equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `nullable binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString] - and vice versa.

* [`NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable boolean integer string` value matching the regular expression [`ValidValues::$regExBooleanIntegerString`][srclink-ValidValues-regExBooleanIntegerString] into its corresponding `nullable boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] - and vice versa.

* [`NullableBooleanIntegerToNullableBooleanBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanIntegerToNullableBooleanBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable boolean integer` value equal to [`ValidValues::$booleanIntegerFalse`][srclink-ValidValues-booleanIntegerFalse] or [`ValidValues::$booleanIntegerTrue`][srclink-ValidValues-booleanIntegerTrue] into its corresponding `nullable boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] - and vice versa.

* [`NullableBooleanStringToNullableBooleanBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanStringToNullableBooleanBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable boolean string` value matching the regular expression [`ValidValues::$regExBooleanString`][srclink-ValidValues-regExBooleanString] into its corresponding `nullable boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] - and vice versa.

* [`NullableBooleanToNullableBooleanIntegerBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanToNullableBooleanIntegerBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `nullable boolean integer` value equal to [`ValidValues::$booleanIntegerFalse`][srclink-ValidValues-booleanIntegerFalse] or [`ValidValues::$booleanIntegerTrue`][srclink-ValidValues-booleanIntegerTrue] - and vice versa.

* [`NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `nullable boolean integer string` value matching the regular expression [`ValidValues::$regExBooleanIntegerString`][srclink-ValidValues-regExBooleanIntegerString] - and vice versa.

* [`NullableBooleanToNullableBooleanStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanToNullableBooleanStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable boolean` value equal to [`ValidValues::$booleanFalse`][srclink-ValidValues-booleanFalse] or [`ValidValues::$booleanTrue`][srclink-ValidValues-booleanTrue] into its corresponding `nullable boolean string` value matching the regular expression [`ValidValues::$regExBooleanString`][srclink-ValidValues-regExBooleanString] - and vice versa.

* [`NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable DateTimeImmutable` value into its corresponding `nullable DateTime string` value depending on a given format - and vice versa.

* [`NullableDateTimeStringToNullableDateTimeBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableDateTimeStringToNullableDateTimeBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable DateTime string` value into its corresponding `nullable DateTime` value depending on a given format - and vice versa.

* [`NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable DateTime string` value into its corresponding `nullable DateTimeImmutable` value depending on a given format - and vice versa.

* [`NullableDateTimeToNullableDateTimeStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableDateTimeToNullableDateTimeStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable DateTime` value into its corresponding `nullable DateTime string` value depending on a given format - and vice versa.

* [`NullableFloatStringToNullableFloatBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableFloatStringToNullableFloatBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable float string` value matching the regular expression [`ValidValues::$regExFloatString`][srclink-ValidValues-regExFloatString] into its corresponding `nullable float` value - and vice versa.

* [`NullableFloatToNullableFloatStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableFloatToNullableFloatStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable float` value into its corresponding `nullable float string` value matching the regular expression [`ValidValues::$regExFloatString`][srclink-ValidValues-regExFloatString] - and vice versa.

* [`NullableIntegerStringToNullableIntegerBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableIntegerStringToNullableIntegerBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable integer string` value matching the regular expression [`ValidValues::$regExIntegerString`][srclink-ValidValues-regExIntegerString] into its corresponding `nullable integer` value - and vice versa.

* [`NullableIntegerToNullableBinaryStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableIntegerToNullableBinaryStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable integer` value into its corresponding `nullable binary string` value matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString] - and vice versa.

* [`NullableIntegerToNullableIntegerStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableIntegerToNullableIntegerStringBiDirectionalConverter]

  Represents a bidirectional converter converting a `nullable integer` value into its corresponding `nullable integer string` value matching the regular expression [`ValidValues::$regExIntegerString`][srclink-ValidValues-regExIntegerString] - and vice versa.

* [`NullStringToNullBiDirectionalConverter`][srclink-BiDirectionalConverters-NullStringToNullBiDirectionalConverter]

  Represents a bidirectional converter converting a `string` value equal to [`ValidValues::$nullString`][srclink-ValidValues-nullString] into a value equal to [`ValidValues::$null`][srclink-ValidValues-null] - and vice versa.

* [`NullToNullStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullToNullStringBiDirectionalConverter]

  Represents a bidirectional converter converting a null value into a value equal to [`ValidValues::$null`][srclink-ValidValues-null] into a `string` value equal to [`ValidValues::$nullString`][srclink-ValidValues-nullString] - and vice versa.



[srclink-ValidValues]: /src/Converters/ValidValues.php
[srclink-ValidValues-null]: /src/Converters/ValidValues.php#L18
[srclink-ValidValues-nullString]: /src/Converters/ValidValues.php#L25
[srclink-ValidValues-booleanFalse]: /src/Converters/ValidValues.php#L32
[srclink-ValidValues-booleanTrue]: /src/Converters/ValidValues.php#L39
[srclink-ValidValues-booleanIntegerFalse]: /src/Converters/ValidValues.php#L46
[srclink-ValidValues-booleanIntegerTrue]: /src/Converters/ValidValues.php#L53
[srclink-ValidValues-regExBooleanString]: /src/Converters/ValidValues.php#L84
[srclink-ValidValues-regExBooleanIntegerString]: /src/Converters/ValidValues.php#L91
[srclink-ValidValues-regExIntegerString]: /src/Converters/ValidValues.php#L112
[srclink-ValidValues-regExFloatString]: /src/Converters/ValidValues.php#L119
[srclink-ValidValues-regExBinaryString]: /src/Converters/ValidValues.php#L126
[srclink-ValidValues-createDateTimeString]: /src/Converters/ValidValues.php#L166

[srclink-AbstractConverter]: /src/Converters/AbstractConverter.php
[srclink-AbstractBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/AbstractBiDirectionalConverter.php
[srclink-AbstractBiDirectionalConverterTrait]: /src/Converters/BiDirectionalConverters/AbstractBiDirectionalConverterTrait.php
[srclink-AbstractDateTimeRelatedConverter]: /src/Converters/AbstractDateTimeRelatedConverter.php
[srclink-AbstractDateTimeRelatedBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/AbstractDateTimeRelatedBiDirectionalConverter.php

[srclink-UniDirectionalConverters-BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BinaryStringToBooleanArrayUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/BinaryStringToBooleanArrayUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BinaryStringToIntegerUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/BinaryStringToIntegerUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanArrayToBinaryStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/BooleanArrayToBinaryStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanIntegerStringToBooleanUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/BooleanIntegerStringToBooleanUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanIntegerToBooleanUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/BooleanIntegerToBooleanUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanStringToBooleanUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/BooleanStringToBooleanUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanToBooleanIntegerStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/BooleanToBooleanIntegerStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanToBooleanIntegerUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/BooleanToBooleanIntegerUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanToBooleanStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/BooleanToBooleanStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-DateTimeImmutableToDateTimeStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/DateTimeImmutableToDateTimeStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-DateTimeStringToDateTimeImmutableUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/DateTimeStringToDateTimeImmutableUniDirectionalConverter.php
[srclink-UniDirectionalConverters-DateTimeStringToDateTimeUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/DateTimeStringToDateTimeUniDirectionalConverter.php
[srclink-UniDirectionalConverters-DateTimeToDateTimeStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/DateTimeToDateTimeStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-EnumValuesToKeysArrayUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/EnumValuesToKeysArrayUniDirectionalConverter.php
[srclink-UniDirectionalConverters-FloatStringToFloatUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/FloatStringToFloatUniDirectionalConverter.php
[srclink-UniDirectionalConverters-FloatToFloatStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/FloatToFloatStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter.php
[srclink-UniDirectionalConverters-IntegerStringToIntegerUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/IntegerStringToIntegerUniDirectionalConverter.php
[srclink-UniDirectionalConverters-IntegerToBinaryStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/IntegerToBinaryStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-IntegerToIntegerStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/IntegerToIntegerStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBinaryStringToNullableIntegerUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableBinaryStringToNullableIntegerUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanIntegerToNullableBooleanUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableBooleanIntegerToNullableBooleanUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanStringToNullableBooleanUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableBooleanStringToNullableBooleanUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanToNullableBooleanIntegerUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableBooleanToNullableBooleanIntegerUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanToNullableBooleanStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableBooleanToNullableBooleanStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableDateTimeStringToNullableDateTimeUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableDateTimeStringToNullableDateTimeUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableDateTimeToNullableDateTimeStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableDateTimeToNullableDateTimeStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableEnumValuesToNullableKeysArrayUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableEnumValuesToNullableKeysArrayUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableFloatStringToNullableFloatUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableFloatStringToNullableFloatUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableFloatToNullableFloatStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableFloatToNullableFloatStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableIntegerStringToNullableIntegerUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableIntegerStringToNullableIntegerUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableIntegerToNullableBinaryStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableIntegerToNullableBinaryStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableIntegerToNullableIntegerStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableIntegerToNullableIntegerStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableNullStringToNullUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableNullStringToNullUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullStringToNullUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullStringToNullUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullToNullStringUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/NullToNullStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter]: /src/Converters/UniDirectionalConverters/StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter.php

[srclink-BiDirectionalConverters-BinaryStringToBooleanArrayBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/BinaryStringToBooleanArrayBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BinaryStringToIntegerBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/BinaryStringToIntegerBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanArrayToBinaryStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/BooleanArrayToBinaryStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanIntegerStringToBooleanBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/BooleanIntegerStringToBooleanBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanIntegerToBooleanBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/BooleanIntegerToBooleanBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanStringToBooleanBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/BooleanStringToBooleanBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanToBooleanIntegerBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/BooleanToBooleanIntegerBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanToBooleanIntegerStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/BooleanToBooleanIntegerStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanToBooleanStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/BooleanToBooleanStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-DateTimeImmutableToDateTimeStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/DateTimeImmutableToDateTimeStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-DateTimeStringToDateTimeBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/DateTimeStringToDateTimeBiDirectionalConverter.php
[srclink-BiDirectionalConverters-DateTimeStringToDateTimeImmutableBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/DateTimeStringToDateTimeImmutableBiDirectionalConverter.php
[srclink-BiDirectionalConverters-DateTimeToDateTimeStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/DateTimeToDateTimeStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-FloatStringToFloatBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/FloatStringToFloatBiDirectionalConverter.php
[srclink-BiDirectionalConverters-FloatToFloatStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/FloatToFloatStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-IntegerStringToIntegerBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/IntegerStringToIntegerBiDirectionalConverter.php
[srclink-BiDirectionalConverters-IntegerToBinaryStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/IntegerToBinaryStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-IntegerToIntegerStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/IntegerToIntegerStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBinaryStringToNullableIntegerBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableBinaryStringToNullableIntegerBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanIntegerToNullableBooleanBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableBooleanIntegerToNullableBooleanBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanStringToNullableBooleanBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableBooleanStringToNullableBooleanBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanToNullableBooleanIntegerBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableBooleanToNullableBooleanIntegerBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanToNullableBooleanStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableBooleanToNullableBooleanStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableDateTimeStringToNullableDateTimeBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableDateTimeStringToNullableDateTimeBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableDateTimeToNullableDateTimeStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableDateTimeToNullableDateTimeStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableFloatStringToNullableFloatBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableFloatStringToNullableFloatBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableFloatToNullableFloatStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableFloatToNullableFloatStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableIntegerStringToNullableIntegerBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableIntegerStringToNullableIntegerBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableIntegerToNullableBinaryStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableIntegerToNullableBinaryStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableIntegerToNullableIntegerStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullableIntegerToNullableIntegerStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullStringToNullBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullStringToNullBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullToNullStringBiDirectionalConverter]: /src/Converters/BiDirectionalConverters/NullToNullStringBiDirectionalConverter.php
