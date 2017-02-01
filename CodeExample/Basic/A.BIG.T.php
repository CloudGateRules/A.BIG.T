<?php

/*
 * License: MIT
 *    Time: 2017-01-20 11:08:14
 *    Name: A.BIG.T.php
 *    Note: CloudGate A.BIG.T Basic Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'A.BIG.T.Conf');

# ClouGate控制器
require_once "../Controller/Controller.php";

# Cloud配置信息
echo "[General]\r\n";
echo "bypass-system = true\r\n";
echo "skip-proxy = {$SKIP}\r\n";
echo "bypass-tun = {$Bypass}\r\n";
echo "dns-server = 8.8.8.8, 8.8.4.4\r\n";
echo "loglevel = notify\r\n";
echo "replica = false\r\n";
echo "ipv6 = false\r\n";
echo "#  \r\n";
echo "# A.BIG.T Config File [CloudGate]\r\n";
echo "# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
echo '🇨🇳 = custom,172.0.0.1,80,aes-256-cfb,Password'."\r\n";
echo '🇳🇫 = custom,172.0.0.1,80,aes-256-cfb,Password'."\r\n";
echo '🇬🇧 = custom,172.0.0.1,80,aes-256-cfb,Password'."\r\n";
echo "[Proxy Group]\r\n";
echo "Proxy = select, 🇨🇳, 🇳🇫, 🇬🇧\r\n";

# CloudGate模块
echo "[Rule]\r\n";
echo "# Default\r\n".Replace(CURL(true,$RuleList['Default']).$CURLContent,false,false,false,true,false).$ABIGT_Default;
echo "# PROXY\r\n".Replace(CURL(true,$RuleList['Advanced']).$CURLContent,false,false,false,true,false).$ABIGT_Advanced;
echo "# DIRECT\r\n".Replace(CURL(true,$RuleList['DIRECT']).$CURLContent,false,false,false,true,false).$ABIGT_DIRECT;
echo "# REJECT\r\n".Replace(CURL(true,$RuleList['REJECT']).$CURLContent,false,false,false,true,false).$ABIGT_REJECT;
echo "# USERAGENT\r\n".Replace(CURL(true,$RuleList['USERAGENT']).$CURLContent,false,false,false,true,false).$ABIGT_USERAGENT;
echo "# KEYWORD\r\n".Replace(CURL(true,$RuleList['KEYWORD']).$CURLContent,false,false,false,true,false).$ABIGT_KEYWORD;
echo "# IPCIDR\r\n".Replace(CURL(true,$RuleList['IPCIDR']).$CURLContent,false,false,false,true,false).$ABIGT_IPCIDR;
echo "# Other\r\n".Replace(CURL(true,$RuleList['Other']).$CURLContent,false,false,false,true,false).$ABIGT_Other;
echo "[URL Rewrite]\r\n";
echo "# Rewrite\r\n".Replace(CURL(true,$RuleList['Rewrite']).$CURLContent,false,false,false,true,false).$ABIGT_Rewrite;

?>