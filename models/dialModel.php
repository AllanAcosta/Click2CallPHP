<?php

class DialModel{
    public $strHost;
    public $strUser;
    public $strSecret;
    public $strChannel;
    public $strContext;
    public $strWaitTime;
    public $strPriority;
    public $strMaxRetry;
    public $strName;
    public $strExten;
    public $callNumber;
    public $strCallerId;
    public $length;

    

    function getStrHost (){
        return $this->strHost;
    }
    function getStrUser (){
        return $this->strUser;
    }
    function getStrSecret (){
        return $this->strSecret;
    }
    function getStrChannel (){
        return $this->strChannel;
    }
    function getStrContext (){
        return $this->strContext;
    }
    function getStrWaitTime (){
        return $this->strWaitTime;
    }
    function getStrPriority (){
        return $this->strPriority;
    }
    function getStrMaxRetry (){
        return $this->strMaxRetry;
    }
    function getStrName (){
        return $this->strName;
    }
    function getStrExten (){
        return $this->strExten;
    }
    function getCallNumber (){
        return $this->callNumber;
    }
    function getStrCallerId (){
        return $this->strCallerId;
    }
    function getLength (){
        return $this->length;
    }

    function setStrHost ($strHost){
        $this->strHost = $strHost;
    }
    function setStrUser ($strUser){
        $this->strUser = $strUser;
    }
    function setStrSecret ($strSecret){
        $this->strSecret = $strSecret;
    }
    function setStrChannel ($strChannel){
        $this->strChannel = $strChannel;
    }
    function setStrContext ($strContext){
        $this->strContext = $strContext;
    }
    function setStrWaitTime ($strWaitTime){
        $this->strWaitTime = $strWaitTime;
    }
    function setStrPriority ($strPriority){
        $this->strPriority = $strPriority;
    }
    function setStrMaxRetry ($strMaxRetry){
        $this->strMaxRetry = $strMaxRetry;
    }
    function setStrName ($strName){
        $this->strName = $strName;
    }
    function setStrExten ($strExten){
        $this->strExten = $strExten;
    }
    function setCallNumber ($callNumber){
        $this->callNumber = $callNumber;
    }
    function setStrCallerId ($strCallerId){
        $this->strCallerId = $strCallerId;
    }
    function setLength ($length){
        $this->length = $length;
    }

    public function successDialViewModel(){
        require_once "views/success.php"; 
    }

    public function mainDialViewModel(){
        require_once "views/main.php";        
    }

}
