  <?php 
function getClsDTFrmClsInfo($classID){
		global $wpdb;    
		$result = $wpdb->get_results("SELECT Class_Date_Time FROM Class_Info WHERE Class_ID=$classID");
		return explode(";",$result[0]->Class_Date_Time);	
	}

		function parseDateFrmClsDT($Class_Date_Time)
		{
			$size = sizeof($Class_Date_Time);
			$resultArray = [];
			for($i=0; $i<$size;$i++){
				$temp=explode(",",$Class_Date_Time[$i]);
				if($temp[0]!="")
					$resultArray[$i]=$temp[0];
				
			}
			
			return $resultArray;
		}
				function parseTimeFrmClsDT($Class_Date_Time,$Date)
		{
			$size = sizeof($Class_Date_Time);
			$resultArray = [];
			for($i=0; $i<$size;$i++){
				$temp=explode(",",$Class_Date_Time[$i]);
				if($temp[0]!="" && $temp[0]==$Date){
					$resultArray=explode("|", $temp[1]);
					return $resultArray;
				}
				
			}
			
			return resultArray;
		}
?>