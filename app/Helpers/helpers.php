<?php


if (!function_exists('generateOrderId')){
    function generateOrderId($prefix){
        return $prefix.rand(0000,9999);
    }
}
