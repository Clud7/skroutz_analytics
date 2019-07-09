<?php
namespace Clud7\Skroutz\Block;

use Magento\Catalog\Helper\Image;
use Magento\Catalog\Model\ProductRepository;
use Magento\Checkout\Model\Session;
use Magento\Directory\Model\CountryFactory;
use Magento\Framework\App\Http\Context;
use Magento\Sales\Model\Order\Config;
use Magento\Sales\Model\OrderFactory;
class Success  extends \Magento\Framework\View\Element\Template
{	
	public function getOrder($id) {
       $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
       $orderid=$objectManager->get('Magento\Sales\Model\Order')->getCollection()->addFieldToFilter('increment_id',array('eq',$id))->getFirstItem()->getId();
       return $this->orderRepository->get($orderid);
    }
	
	
    public function getSomething()
    {
        return 'returned something from custom block.';
    }
	
	
	public function skroutz()
    {	
		$start= '<br /><br />SKROUTZ FEEDBACK STARTS HERE<br /><br />';
        $end='<br /><br />SKROUTZ FEEDBACK ENDS HERE<br /><br />';
		return $start .'returned something from custom block'.$end;
    }
	
	
}