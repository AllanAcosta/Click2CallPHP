<?php
class DialController
{
    public function makeDial()
    {
        require_once("models/dialModel.php");
        $dial = new DialModel();
        $strNameFormField = (isset($_POST['txtname']) ? $_POST['txtname'] : "");
        $strExtenFormField = (isset($_POST['txtphonenumber']) ? $_POST['txtphonenumber'] : "");
        $dial->setStrHost(/*Ip Address*/);
        $dial->setStrUser(/*Username*/);
        $dial->setStrSecret(/*Password*/);
        $dial->setStrChannel("SIP/1179");
        $dial->setStrContext("from-internal");
        $dial->setStrWaitTime("30");
        $dial->setStrPriority("1");
        $dial->setStrMaxRetry("2");
        $dial->setStrName($strNameFormField);
        $dial->setStrExten($strExtenFormField);
        $dial->setCallNumber($strExtenFormField);
        $dial->setStrCallerId("Web-" . $strNameFormField . " <$strExtenFormField>");
        $dial->setLength(strlen($strExtenFormField));

        $strHost = $dial->getStrHost();
        $strUser = $dial->getStrUser();
        $strSecret = $dial->getStrSecret();
        $strChannel = $dial->getStrChannel();
        $strContext = $dial->getStrContext();
        $strWaitTime = $dial->getStrWaitTime();
        $strPriority = $dial->getStrPriority();
        $strMaxRetry = $dial->getStrMaxRetry();
        $strName = $dial->getStrName();
        $strExten = $dial->getStrExten();
        $callNumber = $dial->getCallNumber();
        $strCallerId = $dial->getStrCallerId();
        $length = $dial->getLength();

        if ($length == 7 && is_numeric($strExten)) {

            $oSocket = fsockopen($strHost, 8999, $errnum, $errdesc) or die("Connection to host failed");
            
            if ($oSocket == true) {
                /*
                echo "host: " . $strHost . "<br>";
                echo "User: " . $strUser . "<br>";
                echo "Secret: " . $strSecret . "<br>";
                echo "Channel: " . $strChannel . "<br>";
                echo "Context: " . $strContext . "<br>";
                echo "Wait Time: " . $strWaitTime . "<br>";
                echo "Priority: " . $strPriority . "<br>";
                echo "Max Retry: " . $strMaxRetry . "<br>";
                echo "Name: " . $strName . "<br>";
                echo "Extension: " . $strExten . "<br>";
                echo "Number: " . $callNumber . "<br>";
                echo "Caller ID: " . $strCallerId . "<br>";
                echo "Lenght: " . $length . "<br>";
                */

                fputs($oSocket, "Action: login\r\n");
                fputs($oSocket, "Events: off\r\n");
                fputs($oSocket, "Username: $strUser\r\n");
                fputs($oSocket, "Secret: $strSecret\r\n\r\n");
                fputs($oSocket, "Action: originate\r\n");
                fputs($oSocket, "Channel: $strChannel\r\n");
                fputs($oSocket, "WaitTime: $strWaitTime\r\n");
                fputs($oSocket, "CallerId: $strCallerId\r\n");
                fputs($oSocket, "Exten: $strExten\r\n");
                fputs($oSocket, "Context: $strContext\r\n");
                fputs($oSocket, "Priority: 1\r\n\r\n");
                fputs($oSocket, "Action: Logoff\r\n\r\n");
                sleep(3);
                fclose($oSocket);
                $makeDial = $dial->successDialViewModel();
            } else {
                echo "ocurrio un error";
                echo $errnum;
                echo $errdesc;
            }
            
        }else{
            $dial->mainDialViewModel();
        }
        
    }

 
}
