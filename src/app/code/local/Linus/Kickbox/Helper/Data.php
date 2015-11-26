<?php

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 * @since 2015-11-26
 * @company Linus Shops
 */
class Linus_Kickbox_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @param $email
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
     * @param $email
     * @param array $options
     * @return bool
     */
    public function verifyIsDeliverable($email, $options = array('timeout'=>6000))
    {
        return $this->verify($email, $options)->isDeliverable();
    }
}
