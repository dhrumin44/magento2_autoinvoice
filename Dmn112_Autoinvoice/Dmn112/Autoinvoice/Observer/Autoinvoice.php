<?php

namespace Dmn112\Autoinvoice\Observer;

use Magento\Framework\Event\ObserverInterface;

class Autoinvoice implements ObserverInterface
{
    /**
     * Dmn112 Helper Class
     *  @var \Magento\Catalog\Helper\Data
     */
    protected $_helper;

    /**
     * @param \Dmn112\Autoinvoice\Helper\Data
     */
    public function __construct( \Dmn112\Autoinvoice\Helper\Data $helper)
    {
        $this->_helper = $helper;
    }
    /**
     * Execute when customer checkout successfully
     * @param \Magento\Framework\Event\Observer $observer
     * return void
     */

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if(!$this->_helper->_isEnabledModule())
        {
            return;
        }
        $orderIds = $observer->getEvent()->getOrderIds();
        $orderId = $orderIds[0];
        $order = $this->_helper->getOrderByOrderId($orderId);
        $this->_helper->assignInvoice($order);
        $this->_helper->createShipments($order);
        return;
    }

}
