<?php

/**
 * Provide a simple interface for email verification using Kickbox.
 *
 * @author Sam Schmidt <samuel@dersam.net>
 * @since 2015-11-26
 * @company Linus Shops
 */
class Linus_Kickbox_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Verify an email against Kickbox.io. Returns the response model. Use this
     * if you require access to the fields returned by Kickbox.
     * @param string $email
     * @param array $options
     * @return Linus_Kickbox_Model_Email
     */
    public function verify($email, $options = array('timeout' => 6000))
    {
        return Mage::getModel('linus_kickbox/email')
            ->load($email)
            ->verify($options)
        ;
    }

    /**
     * Verify an email against kickbox.io. Returns a boolean, indicating if
     * the email is valid.  Use this if you just want to know if the email
     * can be delivered.  'deliverable' and 'risky' will both be considered
     * valid and return true.
     * @param string $email
     * @param array $options
     * @return bool
     */
    public function verifyIsDeliverable($email, $options = array('timeout'=>6000))
    {
        return $this->verify($email, $options)->isDeliverable();
    }
}
