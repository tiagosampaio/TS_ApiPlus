<?php
/**
 * Tiago Sampaio
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  TS
 * @package   TS_ApiPlus
 *
 * @copyright Copyright (c) 2016 Tiago Sampaio. (http://tiagosampaio.com)
 *
 * @author    Tiago Sampaio <tiago@tiagosampaio.com>
 */
trait TS_ApiPlus_Trait_Data
{

    use TS_ApiPlus_Trait_Config;


    /**
     * @return TS_ApiPlus_Model_Server_Handler
     */
    protected function getApiServerHandler()
    {
        return Mage::getSingleton('ts_apiplus/server_handler');
    }


    /**
     * @return TS_ApiPlus_Model_Http_Request
     */
    protected function getApiRequest()
    {
        return Mage::getSingleton('ts_apiplus/http_request');
    }


    /**
     * @return TS_ApiPlus_Model_Http_Response
     */
    protected function getApiResponse()
    {
        return Mage::getSingleton('ts_apiplus/http_response');
    }


    /**
     * @return bool
     */
    protected function canUserResultCache()
    {
        if (!$this->isResultCacheEnabled()) {
            return false;
        }

        if (!$this->getCoreCacheInstance()->canUse('api_plus_results')) {
            return false;
        }

        return true;
    }


    /**
     * @return Mage_Core_Model_Cache
     */
    protected function getCoreCacheInstance()
    {
        return Mage::getSingleton('core/cache');
    }


    /**
     * Get the common helper.
     *
     * @return TS_ApiPlus_Helper_Data
     */
    protected function helper()
    {
        return Mage::helper('ts_simpleapi');
    }

}
