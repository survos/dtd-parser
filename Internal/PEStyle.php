<?php

namespace Soothsilver\DtdParser\Internal;

/**
 * Represents the state of the parser that determines what should be done about parameter entities found.
 */
abstract class PEStyle {
    /**
     * Do not expand parameter entities inside quotes. Expand all other parameter entities by adding a single space
     * before and after the replacement text, as per the specification.
     */
    const IgnoreQuotedText = 0;
    /**
     * Do not expand parameter entities inside quotes. Expand all other parameter entities by adding a single space
     * before and after the replacement text, as per the specification.
     *
     * In addition, add an error if, after replacement is done, there are unpaired parentheses. This is not currently
     * being done and should be improved in a future version.
     */
    const MatchingParentheses = 1;
    /**
     * Expand all parameter entities but do not add a single space before and after the replacement text, because we
     * are now in the middle of an entity declaration.
     */
    const InEntityDeclaration = 2;
}
