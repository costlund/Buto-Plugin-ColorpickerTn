<?php
class PluginColorpickerTn{
  public function widget_include($data){
    $element = array();
    $element[] = wfDocument::createHtmlElement('link'  , null, array('href' => '/plugin/colorpicker/tn/color-picker.min.css', 'type' => 'text/css', 'rel' => 'stylesheet'));
    $element[] = wfDocument::createHtmlElement('script', null, array('src'  => '/plugin/colorpicker/tn/color-picker.min.js'  , 'type' => 'text/javascript'));
    wfDocument::renderElement($element);
  }
}
