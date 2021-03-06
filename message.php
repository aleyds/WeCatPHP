<?php 
	class Message{
        
        
        private function ResponseText($postObj)
        {
            	$fromUsername = $postObj->FromUserName;
				$toUsername = $postObj->ToUserName;
                $Rx_Type = trim($postObj->MsgType);
				$keyword = trim($postObj->Content);
            
        }

		public function responseMsg()
		{
			//get post data, May be due to the different environments
			$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

			//extract post data
			if (!empty($postStr)){
					/* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
					   the best way is to check the validity of xml by yourself */
					libxml_disable_entity_loader(true);
					$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
					$fromUsername = $postObj->FromUserName;
					$toUsername = $postObj->ToUserName;
                	$Rx_Type = trim($postObj->MsgType);
					$keyword = trim($postObj->Content);
					$time = time();
					$textTpl = "<xml>
								<ToUserName><![CDATA[%s]]></ToUserName>
								<FromUserName><![CDATA[%s]]></FromUserName>
								<CreateTime>%s</CreateTime>
								<MsgType><![CDATA[%s]]></MsgType>
								<Content><![CDATA[%s]]></Content>
								<FuncFlag>0</FuncFlag>
								</xml>";             
                if(true/*!empty( $keyword )*/)
					{
						$msgType = "";
                        $contentStr = "";
                        switch($Rx_Type)
                        {
                            case 'text':
                            	$msgType = "text";
                            	$contentStr = "这是一个文本的程序";
                            	break;
                            case 'image':
                            	$msgType = "text";
                            	$contentStr = "这是一个图片的程序";
                            	break;
                            default:
                            	$msgType = "text";
                            	$contentStr = "这是一个默认的程序";
                            	break;
                        }
					
						$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
						echo $resultStr;
					}else{
						echo "Input something...";
					}

			}else {
				echo "";
				exit;
			}
		}
	
	};
?>