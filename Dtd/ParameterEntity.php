<?php

namespace Soothsilver\DtdParser\Dtd;

/**
 * Represents a parameter entity declaration.
 */
class ParameterEntity
{
    /**
     * Name of the parameter entity.
     * @var string
     */
    public $name = "";
    /**
     * Replacement text of the entity. All parameter entity references inside the replacement text are already fully expanded.
     * @var string
     */
    public $replacementText = "";
    /**
     * A value that indicates whether this is an external entity. External entities are not loaded.
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
     * Initializes a new instance of the ParamaterEntity class. For internal use only.
     * @param string $name Name of the parameter entity.
     * @param string $replacementText Replacement text of the entity. All parameter entity references inside the replacement text are already fully expanded.
     * @param boolean $external A value that indicates whether this is an external entity. External entities are not loaded.
     * @param string|false $systemId If this is an external entity, then this is its System ID. Otherwise, it's false.
     * @param string|false $publicId If this is an external entity with a public ID, then this is its Public ID. Otherwise, it's false.
     */
    public function __construct($name, $replacementText, $external, $systemId, $publicId)
    {
        $this->name = $name;
        $this->replacementText = $replacementText;
        $this->external = $external;
        $this->systemId = $systemId;
        $this->publicId = $publicId;
    }
}
