<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\RegularExpressions;

use CodeKandis\ToolKit\Validators\IsRegularExpressionValidator;
use CodeKandis\Types\BaseObject;
use CodeKandis\Types\OffsetOutOfRangeException;
use Override;
use function abs;
use function preg_match;
use function preg_match_all;
use function preg_replace;
use function strlen;

/**
 * Represents a class wrapping a regular expression with common methods.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpression extends BaseObject implements RegularExpressionInterface
{
	/**
	 * Gets the wrapped regular expression.
	 * @var string
	 */
	private string $regularExpression {
		get => $this->regularExpression;
	}

	/**
	 * Constructor method.
	 * @param string $regularExpression The regular expression to wrap.
	 * @throws InvalidRegularExpressionException The regular expression is invalid.
	 */
	public function __construct( string $regularExpression )
	{
		$this->regularExpression = $regularExpression;

		if (
			false === new IsRegularExpressionValidator()
				->validate( $this->regularExpression )
		)
		{
			throw InvalidRegularExpressionException::withInvalidRegularExpression( $this->regularExpression );
		}
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function match( string $subject, int $flags = RegularExpressionMatchFlag::None->value, int $offset = 0 ): ?array
	{
		$subjectLength = strlen( $subject );
		if ( $subjectLength < abs( $offset ) )
		{
			throw OffsetOutOfRangeException::withOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset( $offset, (string) -$subjectLength, (string) $subjectLength );
		}

		$matches    = [];
		$isMatching = @preg_match( $this->regularExpression, $subject, $matches, $flags, $offset );

		return 0 === $isMatching
			? null
			: $matches;
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function matchThrowing( string $subject, int $flags = RegularExpressionMatchFlag::None->value, int $offset = 0 ): array
	{
		$matches = $this->match( $subject, $flags, $offset );

		if ( null === $matches )
		{
			throw RegularExpressionNotMatchingException::withNonMatchingRegularExpression( $this->regularExpression );
		}

		return $matches;
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function matchAll( string $subject, int $flags = RegularExpressionMatchAllFlag::None->value, int $offset = 0 ): ?array
	{
		$subjectLength = strlen( $subject );
		if ( $subjectLength < abs( $offset ) )
		{
			throw OffsetOutOfRangeException::withOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset( $offset, (string) -$subjectLength, (string) $subjectLength );
		}

		$matches    = [];
		$isMatching = @preg_match_all( $this->regularExpression, $subject, $matches, $flags, $offset );

		return 0 === $isMatching
			? null
			: $matches;
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function matchAllThrowing( string $subject, int $flags = RegularExpressionMatchAllFlag::None->value, int $offset = 0 ): array
	{
		$matches = $this->matchAll( $subject, $flags, $offset );

		if ( null === $matches )
		{
			throw RegularExpressionNotMatchingException::withNonMatchingRegularExpression( $this->regularExpression );
		}

		return $matches;
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function replace( string $subject, string $replacement, int $limit = -1, ?int &$replacedCount = null ): string
	{
		if ( -1 > $limit )
		{
			throw InvalidLimitException::withInvalidLimit( $limit );
		}

		return @preg_replace( $this->regularExpression, $replacement, $subject, $limit, $replacedCount );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function replaceThrowing( string $subject, string $replacement, int $limit = -1, ?int &$replacedCount = null ): string
	{
		$pregReplaceResult = $this->replace( $subject, $replacement, $limit, $replacedCount );

		if ( 0 !== $limit && 0 === $replacedCount )
		{
			throw RegularExpressionNotMatchingException::withNonMatchingRegularExpression( $this->regularExpression );
		}

		return $pregReplaceResult;
	}
}
