# Regular expressions - Usage

## Index

* [`RegularExpression::__construct()`](#regularexpressionconstruct)
* [`RegularExpression::match()`](#regularexpressionmatch)
* [`RegularExpression::matchThrowing()`](#regularexpressionmatchthrowing)
* [`RegularExpression::matchAll()`](#regularexpressionmatchall)
* [`RegularExpression::matchAllThrowing()`](#regularexpressionmatchallthrowing)
* [`RegularExpression::replace()`](#regularexpressionreplace)
* [`RegularExpression::replaceThrowing()`](#regularexpressionreplacethrowing)

## `RegularExpression::__construct()`

The pattern must be passed to the constructor method [`RegularExpression::construct()`][srclink-RegularExpression-construct].

```php
$regularExpression = new RegularExpression( '~[a-z]+[0-9]+~' );
```

If the passed pattern is invalid an [`InvalidRegularExpressionException`][srclink-InvalidRegularExpressionException] will be thrown.

## `RegularExpression::match()`

[`RegularExpression::match()`][srclink-RegularExpression-match] wraps PHP's function [`preg_match()`][xtlink-php-net-preg_match].

```php
$regularExpression = new RegularExpression( '~[a-z]+[0-9]+~' );
$match             = $regularExpression->match( 'foo01234_bar56789' );
/**
 * $match = [
 *   'foo01234'
 * ]
 */
```

Passing an invalid offset throws an [`InvalidOffsetException`][srclink-InvalidOffsetException].

## `RegularExpression::matchThrowing()`

See [`RegularExpression::match()`](#regularexpressionmatch).

Unlike `RegularExpression::match()` a [`RegularExpressionNotMatchingException`][srclink-RegularExpressionNotMatchingException] will be thrown if the regular expression does not match the subject.

## `RegularExpression::matchAll()`

[`RegularExpression::matchAll()`][srclink-RegularExpression-matchAll] wraps PHP's function [`preg_match_all()`][xtlink-php-net-preg_match_all].

```php
$regularExpression = new RegularExpression( '~[a-z]+[0-9]+~' );
$matches           = $regularExpression->matchAll( 'foo01234_bar56789' );
/**
 * $matches = [
 *   [
 *     'foo01234',
 *     'bar56789'
 *   ]
 * ]
 */
```

Passing an invalid offset throws an [`InvalidOffsetException`][srclink-InvalidOffsetException].

## `RegularExpression::matchAllThrowing()`

See [`RegularExpression::matchAll()`][srclink-RegularExpression-matchAll].

Unlike `RegularExpression::matchAll()` a [`RegularExpressionNotMatchingException`][srclink-RegularExpressionNotMatchingException] will be thrown if the regular expression does not match the subject.

## `RegularExpression::replace()`

[`RegularExpression::replace()`][srclink-RegularExpression-replace] wraps PHP's function [`preg_replace()`][xtlink-php-net-preg_replace].

```php
$regularExpression = new RegularExpression( '~[a-z]+[0-9]+~' );
$replacedSubject   = $regularExpression->replace( 'foo01234_bar_baz56789', 'replacement' );
/**
 * $replacedSubject = 'replacement_bar_replacement'
 */
```

Passing an invalid limit throws an [`InvalidLimitException`][srclink-InvalidLimitException].

## `RegularExpression::replaceThrowing()`

See [`RegularExpression::replace()`][srclink-RegularExpression-replace].

Unlike `RegularExpression::replace()` a [`RegularExpressionNotMatchingException`][srclink-RegularExpressionNotMatchingException] will be thrown if the regular expression does not match the subject.


[xtlink-php-net]: https://php.net
[xtlink-php-net-preg_match]: https://www.php.net/manual/en/function.preg-match.php
[xtlink-php-net-preg_match_all]: https://www.php.net/manual/en/function.preg-match-all.php
[xtlink-php-net-preg_replace]: https://www.php.net/manual/en/function.preg-replace.php

[srclink-RegularExpression-construct]: /src/RegularExpressions/RegularExpression.php#L34
[srclink-RegularExpression-match]: /src/RegularExpressions/RegularExpression.php#L51
[srclink-RegularExpression-matchThrowing]: /src/RegularExpressions/RegularExpression.php#L71
[srclink-RegularExpression-matchAll]: /src/RegularExpressions/RegularExpression.php#L87
[srclink-RegularExpression-matchAllThrowing]: /src/RegularExpressions/RegularExpression.php#L107
[srclink-RegularExpression-replace]: /src/RegularExpressions/RegularExpression.php#L123
[srclink-RegularExpression-replaceThrowing]: /src/RegularExpressions/RegularExpression.php#L137
[srclink-InvalidRegularExpressionException]: /src/RegularExpressions/InvalidRegularExpressionException.php
[srclink-InvalidOffsetException]: /src/RegularExpressions/InvalidOffsetException.php
[srclink-InvalidLimitException]: /src/RegularExpressions/InvalidLimitException.php
[srclink-RegularExpressionNotMatchingException]: /src/RegularExpressions/RegularExpressionNotMatchingException.php
[srclink-RegularExpression]: /src/RegularExpressions/RegularExpression.php
