<?php

if(!function_exists('getClassFromType'))
{
    function getClassFromType(string $type)
    {
        $css_class = '';
        switch ($type) {
            case 'error':
                $css_class = 'bg-red-500';
                break;
            case 'success':
                $css_class = 'bg-green-500';
                break;
            case 'info':
                $css_class = 'bg-blue-500';
                break;

        return $css_class;
        }
    }
}

if(!function_exists('flash_message'))
{
    function flash_message(string $message, string $type)
    {
        session()->flash('message', $message);
        session()->flash('type', getClassFromType($type));
    }
}