<?php

/*
 * License: MIT
 *    Time: 2017-02-02 00:53:23
 *    Name: A.BIG.T.php
 *    Note: CloudGate A.BIG.T Cloud Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'A.BIG.T.Conf');

# ClouGate控制器
require_once "../Controller/Controller.php";

# 处理URI参数
GET().parse_str($REQUEST_QUERY_URI);
Verify($DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0,$Group,$Rule,$IPV6,$Apple,$WIFIAccess,$AutoGroup,$Interval,$Tolerance);
Exp_lode($Group,$DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0);

# Cloud配置信息
echo CURL(true,Cloud($Data,$ABIGT_Config_Module,$Cache).$ConfigFile).$CURLContent."\r\n";

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