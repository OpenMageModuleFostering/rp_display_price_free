<?php
class Rp_Displayfreeprice_Helper_Productprice extends Mage_Core_Helper_Data {
	public function formatPrice($price, $includeContainer = true)
    {
       $modelPrice = Mage::getModel('Displayfreeprice/Freeprice');
        if( empty($modelPrice) ){
            require_once (Mage::getBaseDir('app').'/code/local/Rp/Displayfreeprice/Model/Freeprice.php');
            $modelPrice = new Rp_Displayfreeprice_Model_Freeprice();
        }
        $retval = $modelPrice->getPrice($price);
		if($retval == NULL){
			return parent::formatPrice($price, $includeContainer);
		}else{
			return $retval;
		}
    }
}
?>