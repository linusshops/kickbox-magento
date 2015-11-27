<?php

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 * @since 2015-11-26
 * @company Linus Shops
 */
class LinusKickboxHelperDataTest extends PHPUnit_Framework_TestCase
{
    public function testVerifyValidEmail()
    {
        $this->assertTrue(
            Mage::helper('linus_kickbox')->verifyIsDeliverable(
                'info@linusshops.com'
            )
        );
    }

    public function testVerifyInvalidEmail()
    {
        $this->assertFalse(
            Mage::helper('linus_kickbox')->verifyIsDeliverable(
                'test@example.com'
            )
        );
    }
}
