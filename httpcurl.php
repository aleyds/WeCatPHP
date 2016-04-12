<?php 
include_once('config.php');
class HttpCurl{
	public function HttpGet($url)
    {
        $ch = curl_init();
     
        //设置GET网络地址
        curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_HEADER, 0);

		$output = curl_exec($ch);
		curl_close($ch);
        
        //print_r($output);
        
        return $output; 
    }
    
    public function HttpPost($url, $data)
    {
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        
        //设置POST选项
        curl_setopt($ch, CURLOPT_POST, 1);
        
        //设置POST数据
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		$output = curl_exec($ch);
		curl_close($ch);
        print_r($output);
        return $output;
    }
    
    public function getAccessToken()
    {
        $testUrl = sprintf(ACCESS_TOKEN_URL, APPID,APPSECRET);
        $jsonRet = $this->HttpGet($testUrl);
        $JsonArray = json_decode($jsonRet,true);

        if(array_key_exists("expires_in", $JsonArray))
        {
            if($JsonArray["expires_in"] == ACCESS_TOKEN_SUCCESS)
            {
                return $JsonArray["access_token"];
            }
        }
        else if(array_key_exists("errcode", $JsonArray))
        {
            print_r($JsonArray);
            return null;
        }else
        {
            print_r("error1");
            return null;
        }
    }
};


?>