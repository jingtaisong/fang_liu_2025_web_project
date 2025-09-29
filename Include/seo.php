<?php 
	$id = 1;
	$sql="select * from moba_set where we_id=  '".$id."'";
	$res=mysqli_query($conn,$sql);
	$web_edi=mysqli_fetch_array($res);
	$web_name=$web_edi['web_name'];
	$we_gjz=$web_edi['we_gjz'];
	$web_titlel=$web_edi['web_titlel'];
	$goods_ilogo=$web_edi['goods_img'];
	$we_gjzms=$web_edi['we_gjzms'];
	$wei_yejiao=$web_edi['wei_yejiao'];
	$we_gjzms2=$web_edi['we_gjzms2'];
	$we_gjzms3=$web_edi['we_gjzms3'];
	$we_gjzms4=$web_edi['we_gjzms4'];
	$we_gjzms5=$web_edi['we_gjzms5'];
	$we_gjzms6=$web_edi['we_gjzms6'];
	$we_gjzms7=$web_edi['we_gjzms7'];
	$we_gjzms8=$web_edi['we_gjzms8'];
	$we_gjzms9=$web_edi['we_gjzms9'];
	$we_gjzms10=$web_edi['we_gjzms10'];
	$we_gjzms11=$web_edi['we_gjzms11'];
	$we_gjzms12=$web_edi['we_gjzms12'];
	$we_gjzms13=$web_edi['we_gjzms13'];
	$we_gjzmsw1=$web_edi['we_gjzmsw1'];
	$checkd=$web_edi['checkd'];
	
	if ($checkd=="2") {  die($we_gjzms13);}
	
	session_start(); 
	function check_admin(){
	if($_SESSION["user_nameid"]=="" || $_SESSION['userid_id']==""){	
			die('<script>window.top.location="login.php";</script>');
			die();	}
	}	
	$we_url=$web_edi['we_url'];
	
	$result=mysqli_query($conn,"select id,title,ftitle from mobanqu_archives where  typeid =12 and ismake=1 order by paixu asc,id desc ")or die();
	while($rows = mysqli_fetch_array($result))
	{$footico[] = $rows; }
	$result=mysqli_query($conn,"select litpic,id,title from mobanqu_archives where  typeid =23 and ismake=1 order by paixu asc,id desc LIMIT 1")or die();
	while($rows = mysqli_fetch_array($result))
	{$bico[] = $rows; }
	
	

	function sub_str($string, $length, $dot = '', $charset = 'utf-8')
	{
		if(strlen($string) <= $length){return $string;}
		
		$string = str_replace(array('&amp;', '&quot;', '&lt;', '&gt;'), array('&', '"', '<', '>'), $string);
		$strcut = '';
		if(strtolower($charset) == 'utf-8')
		{
			$n = $tn = $noc = 0;
			while($n < strlen($string))
			{
				$t = ord($string[$n]);
				if($t == 9 || $t == 10 || (32 <= $t && $t <= 126))
				{
					$tn = 1; $n++; $noc++;
				}elseif(194 <= $t && $t <= 223)
				{
					$tn = 2; $n += 2; $noc += 2;
				}elseif(224 <= $t && $t < 239)
				{
					$tn = 3; $n += 3; $noc += 2;
				}elseif(240 <= $t && $t <= 247)
				{
					$tn = 4; $n += 4; $noc += 2;
				}elseif(248 <= $t && $t <= 251)
				{
					$tn = 5; $n += 5; $noc += 2;
				}elseif($t == 252 || $t == 253)
				{
					$tn = 6; $n += 6; $noc += 2;
				}else
				{
					$n++;
				}
		
				if($noc >= $length){break;}
			}
			if($noc > $length){$n -= $tn;}
			$strcut = substr($string, 0, $n);
		}else 
		{
			for($i=0; $i<$length; $i++)
			{
				$strcut .= ord($string[$i]) > 127 ? $string[$i].$string[++$i] : $string[$i];
			}
		}
//		$strcut = str_replace(array('&', '"', '<', '>'), array('&amp;', '&quot;', '&lt;', '&gt;'), $strcut);
		$strcut = str_replace(array('&', '"'), array('&amp;', '&quot;'), $strcut);
		return $strcut.$dot;
	}
?>