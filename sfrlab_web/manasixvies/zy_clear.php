<?php 
	function delimgzy($str){
		if(strpos($str,'/upload/') !== false){ 
			$str=str_replace("../upload/","",$str);
			$str1="../upload/".$str;
			@unlink($str1);
		}
	}	///////////////////////////
	$old_upfilk=isset($_POST['old_upfilk']) ? trim($_POST['old_upfilk']) : '';
	if($upfile1!=$old_upfilk && $upfile1!="")
	{//是新图
		$upfile1=$upfile1;
		//die($old_goods_img);
		delimgzy($old_upfilk);
	}
	elseif($upfile1=="" && $old_upfilk!="")
	{
		$upfile1=$old_upfilk;
	};
	

	$old_upfildf=isset($_POST['old_upfildf']) ? trim($_POST['old_upfildf']) : '';
	if($upfile2!=$old_upfildf && $upfile2!="")
	{//是新图
		$upfile2=$upfile2;
		delimgzy($old_upfildf);
	}
	elseif($upfile2=="" && $old_upfildf!="")
	{
		$upfile2=$old_upfildf;
	};


	$old_upfil3=isset($_POST['old_upfil3']) ? trim($_POST['old_upfil3']) : '';
	if($upfil3!=$old_upfil3 && $upfil3!="")
	{//是新图
		$upfil3=$upfil3;
		delimgzy($old_upfil3);	
	}
	elseif($upfil3=="" && $old_upfil3!="")
	{
		$upfil3=$old_upfil3;
	};

	$old_upfil4=isset($_POST['old_upfil4']) ? trim($_POST['old_upfil4']) : '';
	if($upfil4!=$old_upfil4 && $upfil4!="")
	{//是新图
		$upfil4=$upfil4;
		delimgzy($old_upfil4);	
	}
	elseif($upfil4=="" && $old_upfil4!="")
	{
		$upfil4=$old_upfil4;
	};

	$old_upfil5=isset($_POST['old_upfil5']) ? trim($_POST['old_upfil5']) : '';
	if($upfil5!=$old_upfil5 && $upfil5!="")
	{//是新图
		$upfil5=$upfil5;
		delimgzy($old_upfil5);	
	}
	elseif($upfil5=="" && $old_upfil5!="")
	{
		$upfil5=$old_upfil5;
	};

	$old_upfil6=isset($_POST['old_upfil6']) ? trim($_POST['old_upfil6']) : '';
	if($upfil6!=$old_upfil6 && $upfil6!="")
	{//是新图
		$upfil6=$upfil6;
		delimgzy($old_upfil6);	
	}
	elseif($upfil6=="" && $old_upfil6!="")
	{
		$upfil6=$old_upfil6;
	};
	

	$old_upfil7=isset($_POST['old_upfil7']) ? trim($_POST['old_upfil7']) : '';
	if($upfil7!=$old_upfil7 && $upfil7!="")
	{//是新图
		$upfil7=$upfil7;
		delimgzy($old_upfil7);	
	}
	elseif($upfil7=="" && $old_upfil7!="")
	{
		$upfil7=$old_upfil7;
	};
	
	////yansetu
	$old_upf1=isset($_POST['old_upf1']) ? trim($_POST['old_upf1']) : '';
	if($upfile1!=$old_upfil1 && $upfile1!="")
	{//是新图 upfile1
		$upfile1=$upfile1;
		delimgzy($old_upf1);	
	}
	elseif($upfile1=="" && $old_upf1!="")
	{
		$upfile1=$old_upf1;
	};


	$old_upf3=isset($_POST['old_upf3']) ? trim($_POST['old_upf3']) : '';
	if($upfile3!=$old_upfil6 && $upfile3!="")
	{//是新图
		$upfile3=$upfile3;
		delimgzy($old_upf3);	
	}
	elseif($upfile3=="" && $old_upf3!="")
	{
		$upfile3=$old_upf3;
	};


	$old_upf4=isset($_POST['old_upf4']) ? trim($_POST['old_upf4']) : '';
	if($upfile4!=$old_upfil6 && $upfile4!="")
	{//是新图
		$upfile4=$upfile4;
		delimgzy($old_upf4);
	}
	elseif($upfile4=="" && $old_upf4!="")
	{
		$upfile4=$old_upf4;
	};


	$old_upf5=isset($_POST['old_upf5']) ? trim($_POST['old_upf5']) : '';
	if($upfile5!=$old_upfil6 && $upfile5!="")
	{//是新图
		$upfile5=$upfile5;
		delimgzy($old_upf5);	
	}
	elseif($upfile5=="" && $old_upf5!="")
	{
		$upfile5=$old_upf5;
	};


	$old_upf6=isset($_POST['old_upf6']) ? trim($_POST['old_upf6']) : '';
	if($upfile6!=$old_upfil6 && $upfile6!="")
	{//是新图
		$upfile6=$upfile6;
		delimgzy($old_upf6);	
	}
	elseif($upfile6=="" && $old_upf6!="")
	{
		$upfile6=$old_upf6;
	};

	$old_upf7=isset($_POST['old_upf7']) ? trim($_POST['old_upf7']) : '';
	if($upfile7!=$old_upfil7 && $upfile7!="")
	{//是新图
		$upfile7=$upfile7;
		delimgzy($old_upf7);
	}
	elseif($upfile7=="" && $old_upf7!="")
	{
		$upfile7=$old_upf7;
	};

	$old_upf8=isset($_POST['old_upf8']) ? trim($_POST['old_upf8']) : '';
	if($upfile8!=$old_upfil8 && $upfile8!="")
	{//是新图
		$upfile8=$upfile8;
		delimgzy($old_upf8);
	}
	elseif($upfile8=="" && $old_upf8!="")
	{
		$upfile8=$old_upf8;
	};

	$old_upf9=isset($_POST['old_upf9']) ? trim($_POST['old_upf9']) : '';
	if($upfile9!=$old_upfil9 && $upfile9!="")
	{//是新图
		$upfile9=$upfile9;
		delimgzy($old_upf9);
	}
	elseif($upfile9=="" && $old_upf9!="")
	{
		$upfile9=$old_upf9;
	};

	$old_upf10=isset($_POST['old_upf10']) ? trim($_POST['old_upf10']) : '';
	if($upfile10!=$old_upfil10 && $upfile10!="")
	{//是新图
		$upfile10=$upfile10;
		delimgzy($old_upf10);	
	}
	elseif($upfile10=="" && $old_upf10!="")
	{
		$upfile10=$old_upf10;
	};


	$old_upf11=isset($_POST['old_upf11']) ? trim($_POST['old_upf11']) : '';
	if($upfile11!=$old_upfil11 && $upfile11!="")
	{//是新图
		$upfile11=$upfile11;
		delimgzy($old_upf11);	
	}
	elseif($upfile11=="" && $old_upf11!="")
	{
		$upfile11=$old_upf11;
	};


?>