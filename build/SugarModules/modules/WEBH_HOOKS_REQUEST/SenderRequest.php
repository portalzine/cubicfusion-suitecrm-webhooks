<?php

class SenderRequest
{
    public $curl;

    public function __construct($url, $fields, $type_request)
    {
        $this->curl_init($url, $fields, $type_request);
    }

    public function sendRequest(): array
    {
        $response = curl_exec($this->curl);
        if ($response === false) {
            return ['status' => 'error', 'result' => curl_error($this->curl)];
        }
        curl_close($this->curl);

        return ['status' => 'ok', 'result' => $response];
    }

    public function curl_init($url, $fields, $type_request)
    {
        $this->curl = curl_init();

        if ($type_request == 'json') {
 			
			$defaultHeaders = array(   			
             				'Content-Type' => 'application/json'
            	);
			
			$curlHeaders = $this->extractCurlHeaders($fields, $defaultHeaders);

			$fields = json_encode( $fields);
				  
        } else {

            $defaultHeaders = array(
                'Content-Type' => 'multipart/form-data'
            );

			$curlHeaders = $this->extractCurlHeaders($fields, $defaultHeaders);


        }
		
        curl_setopt_array($this->curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $fields,
            CURLOPT_HTTPHEADER => $curlHeaders,
        ));
    }
	
	/**
     * Extracts cURL headers from a key/value array and removes them from the original array
     * Filters for headers that start with "Authorization" or "X-"
     * Merges with default headers
     * 
     * @param array &$headers Associative array of headers (key => value) - passed by reference
     * @param array $defaultHeaders Default headers to include (key => value format)
     * @return array Array of formatted headers ready for cURL CURLOPT_HTTPHEADER
     */
      public function extractCurlHeaders(array &$fields, array $defaultHeaders = []): array {
          $curlHeaders = [];

          // Add default headers first
          foreach ($defaultHeaders as $key => $value) {
              $curlHeaders[] = $key . ': ' . $value;
          }

          // Extract and add matching headers from input
          foreach ($fields as $key => $value) {
              // Check if header starts with "Authorization" or "X-" (case-insensitive)
              if (stripos($key, 'Authorization') === 0 || stripos($key, 'X-') === 0 || stripos($key, 'Cache-Control') === 0 || stripos($key, 'Accept') === 0 ) {
                  // Format as "Header-Name: value" for cURL
                  $curlHeaders[] = $key . ': ' . $value;
                  // Remove from original array
                  unset($fields[$key]);
              }
          }

          return $curlHeaders;
      }

}