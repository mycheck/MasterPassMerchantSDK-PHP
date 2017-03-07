<?php

namespace Masterpass\MerchantSDK\API;

/**
 * PostbackApi
 * PHP version 5
 *
 * @category Class
 */

/**
 * PostbackApi Class
 *
 * @category Class
 * @package  masterpass-merchant
 * @subpackage api
 */

class PostbackApi
{

  /**
   * Postback Service
    * This is the final step of MasterPass transaction. MasterPass transaction is a service call from the merchant to MasterPass,communicating the result of the transaction (success or failure). This is a mandatory step. Abandoned transactions do not need to be reported. The &lt;TransactionId&gt; value should be the value from the &lt;TransactionId&gt; element of the Checkout XML returned in the Checkout request.
	   * @param merchant_transactions Merchant transactions details.
	   * @return \mastercard_masterpass_merchant\model\MerchantTransactions
   */

     public static function create(MerchantTransactions $merchant_transactions
,$config = NULL){

	 $path = "/masterpass/v6/transaction";

	 $serviceRequest = new ServiceRequest();


	 $serviceRequest->requestBody($merchant_transactions);

	 $serviceRequest->contentType("application/xml");

	 $apiClient = new ApiClient($config);
   	 $apiClient->setApiTracker(new APITrackerImpl());
	 $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

	 return $apiClient->call($path,$serviceRequest,"POST","MerchantTransactions");
	}

}

