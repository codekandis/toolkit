# Converters - Usage

## Index

* [Implementation requirements](#implementation-requirements)
* [Unidirectional converters](#unidirectional-converters)
* [Bidirectional converters](#bidirectional-converters)

## Implementation requirements

* All converters must implement the interface [ConverterInterface][srclink-ConverterInterface].
* All unidirectional converters must implement the interface [UniDirectionalConverterInterface][srclink-UniDirectionalConverters-UniDirectionalConverterInterface].
* All bidirectional converters must implement the interface [BiDirectionalConverterInterface][srclink-BiDirectionalConverters-BiDirectionalConverterInterface].

## Unidirectional converters

Unidirectional converters can only convert from one value into another.

```php
$value = false;

new IntegerToBinaryStringUniDirectionalConverter()
    ->convert( $value );
/**
 * 0
 */

$value = 0;

new BinaryStringToIntegerUniDirectionalConverter()
    ->convert( $value );
/**
 * false
 */
```

## Bidirectional converters

Bidirectional converters can convert from one value into another and vice versa.

```php
$value = 42;

new IntegerToBinaryStringBiDirectionalConverter()
    ->convertTo( $value );
/**
 * '101010'
 */

$value = '101010';

new IntegerToBinaryStringBiDirectionalConverter()
    ->convertFrom( $value );
/**
 * 42
 */
```



[srclink-ConverterInterface]: /src/Converters/ConverterInterface.php
[srclink-UniDirectionalConverters-UniDirectionalConverterInterface]: /src/Converters/UniDirectionalConverters/UniDirectionalConverterInterface.php
[srclink-BiDirectionalConverters-BiDirectionalConverterInterface]: /src/Converters/BiDirectionalConverters/BiDirectionalConverterInterface.php
