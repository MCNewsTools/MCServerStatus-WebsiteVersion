<?php

/*
 Name: Minecraft PC & PE Server Status (Website Version)
 URI: https://github.com/MCServerStatus/MCServerStatus-WebsiteVersion
 Description: Minecraft PC & PE Server Status Website Version, On your website show Minecraft PC & PE server data.
 Version: 1.0.0
 Author: 旋風之音 GoneTone
 Author URI: https://www.facebook.com/TPGoneTone/
 Author email: p29022716@gmail.com
 License: GPL 2
 Donate URI: https://qr.allpay.com.tw/ffSH4
*/

/*  Copyright 2016 GoneTone (email: p29022716@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Definition host and port
$host = 'meow.mcpe.tw';
$port = 19132;

// Load files
require 'mcserverstatus/libs/ApiClient.php';
require 'mcserverstatus/libs/MinecraftQuery.php';

// Judgment server status
$client = new ApiClient($host, $port);
$server = $client->call();

if ($server === null) {
    require 'mcserverstatus/offline.phtml';
} else {
    require 'mcserverstatus/online.phtml';
}
?>