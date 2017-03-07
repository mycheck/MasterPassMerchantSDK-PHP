<?php

namespace Masterpass\MerchantSDK\API;

/**
 * SessionKeySigningApi
 * PHP version 5
 *
 * @category Class
 */

/**
 * SessionKeySigningApi Class
 *
 * @category Class
 * @package  masterpass-merchant
 * @subpackage api
 */

class SessionKeySigningApi
{

  /**
   * Session Key Signing
    * Session Key Signing Android SDK.
	   * @param session_key_signing_request Session Key Signing request.
	   * @return \mastercard_masterpass_merchant\model\SessionKeySigningResponse
   */

     public static function create(SessionKeySigningRequest $session_key_signing_request
,$config = NULL){

	 $path = "/masterpass/v6/sessionkeysigning";

	 $serviceRequest = new ServiceRequest();


	 $serviceRequest->requestBody($session_key_signing_request);

	 $serviceRequest->contentType("application/xml");

	 $apiClient = new ApiClient($config);
   	 $apiClient->setApiTracker(new APITrackerImpl());
	 $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

	 return $apiClient->call($path,$serviceRequest,"POST","SessionKeySigningResponse");
	}

}

