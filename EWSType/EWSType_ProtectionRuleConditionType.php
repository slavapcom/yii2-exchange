<?php namespace Exchange\EWSType; use Exchange\EWSType;
/**
 * Contains EWSType_ProtectionRuleConditionType.
 */

/**
 * Identifies a condition that must be satisfied for the action part of a rule
 * to be executed.
 *
 * @package php-ews\Types
 */
class EWSType_ProtectionRuleConditionType extends EWSType
{
    /**
     * Evaluates to true if all recipients of an e-mail message are internal to
     * the sender's organization.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ProtectionRuleAllInternalType
     */
    public $AllInternal;

    /**
     * Specifies that all child elements must match to evaluate to true.
     *
     * Specifies that there must be more than one protection rule child
     * condition.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ProtectionRuleAndType
     */
    public $And;

    /**
     * Specifies that any recipient of the e-mail message matches any of the
     * specified recipients in the child Value (ProtectionRuleValueType)
     * elements.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ProtectionRuleRecipientIsType
     */
    public $RecipientIs;

    /**
     * Specifies that the department of the sender matches any of the specified
     * departments in the child Value (ProtectionRuleValueType) elements.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ProtectionRuleSenderDepartmentsType
     */
    public $SenderDepartments;

    /**
     * Specifies a condition that always matches.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ProtectionRuleTrueType
     */
    public $True;
}
