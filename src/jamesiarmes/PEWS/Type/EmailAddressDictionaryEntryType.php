<?php
/**
 * Contains \jamesiarmes\PEWS\Type\EmailAddressDictionaryEntryType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Represents a single e-mail address for a contact.
 *
 * @package php-ews\Types
 *
 * @todo Create a common EntryType class.
 * @todo Create a common TextEntryType class.
 */
class EmailAddressDictionaryEntryType extends Type
{
    /**
     * The email address represented by this entry.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * Identifies the e-mail address.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\EmailAddressKeyType
     */
    public $Key;

    /**
     * Defines the mailbox type of a mailbox user.
     *
     * This attribute is optional.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\Enumeration\MailboxTypeType
     */
    public $MailboxType;

    /**
     * Defines the name of the mailbox user.
     *
     * This attribute is optional.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Name;

    /**
     * Defines the routing that is used for the mailbox.
     *
     * This attribute is optional and defaults to SMTP.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\Enumeration\RoutingType
     */
    public $RoutingType;
}