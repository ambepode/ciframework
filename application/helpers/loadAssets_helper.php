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