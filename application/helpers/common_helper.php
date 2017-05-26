<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('loadCss')){
    /**
     * create css link
     * @param array $path
     * @return string
     */
    function loadCss($path){
        $html = '';
        $pathArr = $path;

        if(is_array($pathArr)){
            foreach($pathArr as $path){
                $path = $path . CSS_VER;
                $html .= "<link rel='stylesheet' type='text/css' href='{$path}'>\n";
            }
        }

        return $html;
    }
}

if(!function_exists('loadJs')){
    /**
     * create css link
     * @param array $path
     * @return string
     */
    function loadJs($path){
        $html = '';
        $pathArr = $path;

        if(is_array($pathArr)){
            foreach($pathArr as $path){
                $path = $path . JS_VER;
                $html .= "<script type='text/javascript' src='{$path}'></script>\n";
            }
        }

        return $html;
    }
}

if(!function_exists('alertMessage')){
    /**
     * create alert message
     * @param string $msg
     * @return string
     */
    function alertMessage($msg){
        $script = '';

        if(!empty($msg)){
            $script = <<<SCRIPT
<script type="text/javascript">
    alert("{$msg}");
</script>
SCRIPT;
        }

        return $script;
    }
}

if(!function_exists('saveSession')){
	/**
	 * save Session data
	 * @param array $data
	 * @return bool
	 */
	function saveSession($data){
		var_export($data);
		$userData = [];

		$userData = [
			'session_id' => '',
			'ip_address' => '',
			'user_agent' => '',
			'last_activity' => '',
			'user_data' => ''
		];

		return true;
	}
}