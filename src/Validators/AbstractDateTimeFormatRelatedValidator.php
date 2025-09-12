<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;

/**
 * Represents the base class of any `DateTime` format related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractDateTimeFormatRelatedValidator extends BaseObject implements DateTimeFormatRelatedValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	public string $format {
		get => $this->format;
	}

	/**
	 * Constructor method.
	 * @param string $format The expected format.
	 */
	public function __construct( string $format )
	{
		$this->format = $format;
	}
}
