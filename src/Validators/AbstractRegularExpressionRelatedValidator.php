<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\RegularExpressions\InvalidRegularExpressionException;
use CodeKandis\ToolKit\RegularExpressions\InvalidRegularExpressionExceptionInterface;
use CodeKandis\Types\BaseObject;

/**
 * Represents the base class of any regular expression related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractRegularExpressionRelatedValidator extends BaseObject implements RegularExpressionRelatedValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	public string $regularExpression {
		get => $this->regularExpression;
	}

	/**
	 * Constructor method.
	 * @param string $regularExpression The pattern to match the value.
	 * @throws InvalidRegularExpressionExceptionInterface The regular expression is invalid.
	 */
	public function __construct( string $regularExpression )
	{
		$this->regularExpression = $regularExpression;

		if (
			false === new IsRegularExpressionValidator()->validate( $this->regularExpression )
		)
		{
			throw InvalidRegularExpressionException::withInvalidRegularExpression( $this->regularExpression );
		}
	}
}
