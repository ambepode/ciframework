<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('loadAssets')){
    /**
     * create css link
     * @param array $path
     * @return string
     */
    function loadAssets($path, $asset = 'css'){
        $html = '';
        $pathArr = $path;

        if(is_array($pathArr)){
            foreach($pathArr as $path){
                $path = $path . CSS_VER;

	            if($asset == 'css') {
		            $html .= "<link rel='stylesheet' type='text/css' href='{$path}'>\n";
	            } else {
		            $html .= "<script type='text/javascript' src='{$path}'></script>\n";
	            }
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