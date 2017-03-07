<?php

namespace Masterpass\MerchantSDK\API;

/**
 * ShoppingCartApi
 * PHP version 5
 *
 * @category Class
 */

/**
 * ShoppingCartApi Class
 *
 * @category Class
 * @package  masterpass-merchant
 * @subpackage api
 */

class ShoppingCartApi
{

  /**
   * ShoppingCart service
    * This service used to enables shopping cart data to be displayed to users as they proceed through the MasterPass login and checkout.Merchants must call the Shopping Cart service before invoking the MasterPass UI for checkout.
	   * @param shopping_cart_request Shopping Cart Request.
	   * @return \mastercard_masterpass_merchant\model\ShoppingCartResponse
   */

     public static function create(ShoppingCartRequest $shopping_cart_request
,$config = NULL){

	 $path = "/masterpass/v6/shopping-cart";

	 $serviceRequest = new ServiceRequest();


	 $serviceRequest->requestBody($shopping_cart_request);

	 $serviceRequest->contentType("application/xml");

	 $apiClient = new ApiClient($config);
   	 $apiClient->setApiTracker(new APITrackerImpl());
	 $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

	 return $apiClient->call($path,$serviceRequest,"POST","ShoppingCartResponse");
	}

}

