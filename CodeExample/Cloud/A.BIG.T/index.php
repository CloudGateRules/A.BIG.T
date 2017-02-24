<?php

/*
 * License: MIT
 *    Time: 2017-02-12 01:52:18
 *    Name: A.BIG.T.php
 *    Note: CloudGate A.BIG.T Cloud Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'A.BIG.T.Conf');

# ClouGate控制器
require_once "../../Controller/Controller.php";

# 处理URI参数
GET().parse_str($REQUEST_QUERY_URI);
@Verify($DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0,$Group,$Rule,$IPV6,$Apple,$WIFIAccess,$AutoGroup,$Interval,$Tolerance,$TimeOut,$AGENT);
Exp_lode($Group,$DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0);

# Cloud配置信息
echo CURL(Cloud($Data,$ABIGT_Config_Module,$Cache).$ConfigFile).$CURLContent."\r\n";

# CloudGate模块
echo "[Rule]\r\n";
echo Replace(CURL($RuleList['Default']).$CURLContent,'A.BIG.T').$ABIGT_Default;
echo Replace(CURL($RuleList['Advanced']).$CURLContent,'A.BIG.T').$ABIGT_Advanced;
echo Replace(CURL($RuleList['DIRECT']).$CURLContent,'A.BIG.T').$ABIGT_DIRECT;
echo Replace(CURL($RuleList['REJECT']).$CURLContent,'A.BIG.T').$ABIGT_REJECT;
echo Replace(CURL($RuleList['USERAGENT']).$CURLContent,'A.BIG.T').$ABIGT_USERAGENT;
echo Replace(CURL($RuleList['KEYWORD']).$CURLContent,'A.BIG.T').$ABIGT_KEYWORD;
echo Replace(CURL($RuleList['IPCIDR']).$CURLContent,'A.BIG.T').$ABIGT_IPCIDR;
echo Replace(CURL($RuleList['Other']).$CURLContent,'A.BIG.T').$ABIGT_Other;
echo "[Host]\r\n";
echo Replace(CURL($RuleList['Host']).$CURLContent,'A.BIG.T').$ABIGT_Host;
echo "[URL Rewrite]\r\n";
echo Replace(CURL($RuleList['Rewrite']).$CURLContent,'A.BIG.T').$ABIGT_Rewrite;

?>