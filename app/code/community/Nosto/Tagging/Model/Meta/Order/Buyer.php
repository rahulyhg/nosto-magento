<?php
/**
 * Magento
 *  
 * NOTICE OF LICENSE
 *  
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *  
 * DISCLAIMER
 *  
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *  
 * @category  Nosto
 * @package   Nosto_Tagging
 * @author    Nosto Solutions Ltd <magento@nosto.com>
 * @copyright Copyright (c) 2013-2017 Nosto Solutions Ltd (http://www.nosto.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Meta data class which holds information about the buyer of an order.
 * This is used during the order confirmation API request and the order history
 * export.
 *
 * @category Nosto
 * @package  Nosto_Tagging
 * @author   Nosto Solutions Ltd <magento@nosto.com>
 */
class Nosto_Tagging_Model_Meta_Order_Buyer extends Nosto_Object_Order_Buyer
{
    /**
     * Loads the order buyer from the given order.
     *
     * @param Mage_Sales_Model_Order $order the order from which to load the buyer
     */
    public function loadData(Mage_Sales_Model_Order $order)
    {
        $this->setFirstName($order->getCustomerFirstname());
        $this->setLastName($order->getCustomerLastname());
        $this->setEmail($order->getCustomerEmail());

        $address = $order->getBillingAddress();
        if ($address instanceof Mage_Sales_Model_Order_Address) {
            $this->setPhone($address->getTelephone());
            $this->setPostcode($address->getPostcode());
            $this->setCountry($address->getCountry());
        }
    }
}
