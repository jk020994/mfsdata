<?php
if (!empty( $_REQUEST['phone'])   && !empty( $_REQUEST['exten']  ) )
{
        $num = $_REQUEST['phone'];
        $ext = $_REQUEST['exten'];
        $num = preg_replace( "/^\+7/", "8", $num );
        $num = preg_replace( "/\D/", "", $num );
 
        if ( ! empty( $num ) )
        {
                echo "Dialing $num\r\n";
 
                $timeout = 10;
                $asterisk_ip = "172.16.8.10";
 
                $socket = fsockopen($asterisk_ip,"5038", $errno, $errstr, $timeout);
                fputs($socket, "Action: Login\r\n");
                fputs($socket, "UserName: mfs2call\r\n");
                fputs($socket, "Secret: MBS@haiphong\r\n\r\n");
 
                $wrets=fgets($socket,128);
 
                echo $wrets;
 
                fputs($socket, "Action: Originate\r\n" );
                fputs($socket, "Channel: Local/$ext@from-internal\r\n" );
                fputs($socket, "Exten: $num\r\n" );
                fputs($socket, "Context: from-internal\r\n" );
                fputs($socket, "Priority: 1\r\n" );
                fputs($socket, "Async: yes\r\n" );
                fputs($socket, "WaitTime: 15\r\n" );
                fputs($socket, "Callerid: $num\r\n\r\n" );
 
                $wrets=fgets($socket,128);
                echo $wrets;
        }
        else
        {
                echo "Unable to determine number from (" . $_REQUEST['phone'] . ")\r\n";
        }
}
else
{
    echo "Please enter a number to dial.";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

