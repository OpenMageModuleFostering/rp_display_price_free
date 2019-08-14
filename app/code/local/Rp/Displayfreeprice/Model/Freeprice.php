<?php
class Rp_Displayfreeprice_Model_Freeprice{
    public function getPrice( $price ){
        $enabled = Mage::getStoreConfig('displayfreeprice/general/freeprice_enabled');
		$text = Mage::getStoreConfig('displayfreeprice/general/freeprice_text');
        if($price == 0 && $enabled == "1"){
            return $text;
        }
        return NULL;
    }
}
