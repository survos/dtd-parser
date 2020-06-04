<?php
namespace Soothsilver\DtdParser\Dtd;

/**
 * Represents the declaration of a general entity.
 */
class GeneralEntity
{
    /**
     * Name of the entity.
     * @var string
     */
    public $name = "";
    /**
     * Replacement text of the entity. Entity references within this text are not expanded.
     * @note {
     * In XML specification, this is called the entity value. It is considered replacement text only after the
     * entity references are expanded.
     * }
     * @var string
     */
    public $replacementText = "";
    /**
     * If this is an external entity, then this is the notation that should be used to process it. It is captured
     * from the NDATA value.
     * @var string|bool The value in the NDATA declaration, or FALSE if this is not an external entity.
     */
    public $notation = false;
    /**
     * A value that indicates whether this is an external entity.
     * @var bool
     */
    public $external = false;
    /**
     * If this is an external entity, then this is its System ID. Otherwise, it's false.
     * @var string|false
     */
    public $systemId = false;
    /**
     * If this is an external entity with a public ID, then this is its Public ID. Otherwise, it's false.
     * @var string|false
     */
    public $publicId = false;

    /**
     * Initializes a new instance of the GeneralEntity class. For internal use only.
     * @param string $name Name of the entity.
     * @param string $replacementText Replacement text of the entity. Entity references within this text are not expanded.
     * @param boolean $external A value that indicates whether this is an external entity.
     * @param string|false $systemId If this is an external entity, then this is its System ID. Otherwise, it's false.
     * @param string|false $publicId If this is an external entity with a public ID, then this is its Public ID. Otherwise, it's false.
     * @param string|false $notation The NDATA value, or false if this is not an external entity declaration.
     */
    public function __construct($name, $replacementText, $external, $systemId, $publicId, $notation)
    {
        $this->name = $name;
        $this->replacementText = $replacementText;
        $this->notation = $notation;
        $this->external = $external;
        $this->systemId = $systemId;
        $this->publicId = $publicId;
    }
}
