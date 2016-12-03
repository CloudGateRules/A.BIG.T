<?php

# 触发下载
header('Content-Disposition: attachment; filename='.'A.BIG.T.Conf');

# 设置开启哪些模块 | 必须放置在Controller控制器前面
$DefaultModule   = "true";
$AdvancedModule  = "true";
$BasicModule     = "true";
$DIRECTModule    = "true";
$REJECTModule    = "true";
$KEYWORDModule   = "true";
$IPCIDRModule    = "true";
$OtherModule     = "true";
$RewriteModule   = "true";
$USERAGENTModule = "true";

# 引用Controller控制器模块
require '../Controller/Controller.php';

# 检测GET参数
if(empty($Logo)){$Logo="true";}else{$Logo=$Logo;}
if(empty($AutoGroup)){$AutoGroup="false";}else{$AutoGroup=$AutoGroup;}
if(empty($Rule)){$Rule="false";}elseif($Rule=="true"){$Rule="true";}else{$Rule="false";}
if(empty($Group)){$Group="1";}else{$Group=$Group;}
if(empty($IPV6)){$IPV6="true";}elseif($IPV6=="true"){$IPV6="true";}else{$IPV6="false";}
if(empty($Apple)){$Apple="false";}elseif($Apple=="true"){$Apple="true";}else{$Apple="false";}
if(empty($DNS1)){$DNS1="8.8.8.8";}else{$DNS1=$DNS1;}
if(empty($DNS2)){$DNS2="8.8.4.4";}else{$DNS2=$DNS2;}
if(empty($Config1)){$Config1="127.0.0.1,80,aes-256-cfb,Password";}else{$Config1=$Config1;}
if(empty($Config2)){$Config2="127.0.0.1,80,aes-256-cfb,Password";}else{$Config2=$Config2;}
if(empty($Config3)){$Config3="127.0.0.1,80,aes-256-cfb,Password";}else{$Config3=$Config3;}
if(empty($Config4)){$Config4="127.0.0.1,80,aes-256-cfb,Password";}else{$Config4=$Config4;}
if(empty($Config5)){$Config5="127.0.0.1,80,aes-256-cfb,Password";}else{$Config5=$Config5;}
if(empty($Flag1)){$Flag1="NONE1";}else{$Flag1=$Flag1;}
if(empty($Flag2)){$Flag2="NONE2";}else{$Flag2=$Flag2;}
if(empty($Flag3)){$Flag3="NONE3";}else{$Flag3=$Flag3;}
if(empty($Flag4)){$Flag4="NONE4";}else{$Flag4=$Flag4;}
if(empty($Flag5)){$Flag5="NONE5";}else{$Flag5=$Flag5;}

# 判断GET参数
if($Rule=="true"){$AdvancedCURLF=$BasicCURLF;}elseif($Rule=="false"){$AdvancedCURLF=$AdvancedCURLF;}

# 正则表达式替换规则格式
if($Apple=="true"){$Default  = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$DefaultCURLF."\r\n");}
elseif($Apple=="false"){$Default  = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$DefaultCURLF."\r\n");}
$Advanced = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$AdvancedCURLF."\r\n");
$DIRECT   = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$DIRECTCURLF."\r\n");
$REJECT   = preg_replace('/([^])([ \s]+)/','$1,REJECT$2',$REJECTCURLF."\r\n");
$KEYWORD  = preg_replace('/([^])([ \s]+)/','DOMAIN-KEYWORD,$1$2,force-remote-dns',$KEYWORDCURLF."\r\n");
$IPCIDR   = preg_replace('/([^])([ \s]+)/','IP-CIDR,$1$2,no-resolve',$IPCIDRCURLF."\r\n");
$Rewrite  = preg_replace('/([^])([ \s]+)/','$1$2',$RewriteCURLF."\r\n");
$Other    = preg_replace('/([^])([ \s]+)/','$1$2',$OtherCURLF."\r\n");

# A.BIG.T[General]规则模板
echo "[General]\r\n";
echo "bypass-system = true\r\n";
echo "skip-proxy = 10.0.0.0/8, 17.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16, localhost, *.local, ::ffff:0:0:0:0/1, ::ffff:128:0:0:0/1, *.crashlytics.com\r\n";
if($Logo=="true"){echo "bypass-tun = 10.0.0.0/8,127.0.0.0/24,172.0.0.0/8,192.168.0.0/16\r\n";}
elseif($Logo=="false"){echo "bypass-tun = 0.0.0.0/8,10.0.0.0/8,127.0.0.0/24,172.0.0.0/8,192.168.0.0/16\r\n";}
if($DNS1&&$DNS2){echo "dns-server = $DNS1,$DNS2\r\n";}
elseif($DNS1!=NULL&&$DNS2!=NULL){echo "dns-server = 8.8.8.8,8.8.4.4\r\n";}
else{echo "dns-server = 8.8.8.8,8.8.4.4\r\n";}
echo "loglevel = notify\r\n";
echo "replica = false\r\n";
if($IPV6=="true"){echo "ipv6 = false\r\n";}
elseif($IPV6=="false"){echo "ipv6 = false\r\n";}
echo "#  \r\n";
echo "# A.BIG.T Config File [CloudGate]\r\n";
echo "# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
if ($Group<"2"){echo "$Flag1 = custom,$Config1\r\n";}
elseif ($Group<"3"){
echo "$Flag1 = custom,$Config1\r\n";
echo "$Flag2 = custom,$Config2\r\n";}
elseif ($Group<"4"){
echo "$Flag1 = custom,$Config1\r\n";
echo "$Flag2 = custom,$Config2\r\n";
echo "$Flag3 = custom,$Config3\r\n";}
elseif ($Group<"5"){
echo "$Flag1 = custom,$Config1\r\n";
echo "$Flag2 = custom,$Config2\r\n";
echo "$Flag3 = custom,$Config3\r\n";
echo "$Flag4 = custom,$Config4\r\n";}
elseif ($Group<"6"){
echo "$Flag1 = custom,$Config1\r\n";
echo "$Flag2 = custom,$Config2\r\n";
echo "$Flag3 = custom,$Config3\r\n";
echo "$Flag4 = custom,$Config4\r\n";
echo "$Flag5 = custom,$Config5\r\n";}
elseif ($Group>"6"){echo "$Flag1 = custom,$Config1\r\n";}
else {echo "$Flag1 = custom,$Config1\r\n";}
echo "[Proxy Group]\r\n";
echo "Proxy = select, 🇨🇳, 🇳🇫, 🇬🇧\r\n";

# 最后模块内容输出
echo "[Rule]\r\n";
echo "# Default\r\n".$Default;
echo "# PROXY\r\n".$Advanced;
echo "# DIRECT\r\n".$DIRECT;
echo "# REJECT\r\n".$REJECT;
echo "# KEYWORD\r\n".$KEYWORD;
echo "# IP-CIDR\r\n".$IPCIDR;
echo "# Other\r\n".$Other;
echo "[URL Rewrite]\r\n";
echo "# Rewrite\r\n".$Rewrite;

?>
