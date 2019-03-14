<?php
	require('connect_db.php');
	$strSQL = "SELECT * FROM place_th";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	// while($objResult = mysql_fetch_array($objQuery))
    // {
	// 	$placename = $objResult["place_name"];
		// 	$strTitle = $result["images"];
// 	$strHome = "หน้าแรก";
// 	$strService = "บริการของเรา";
// 	$strAbout = "เกี่ยวกับเรา";
// 	$strContact = "ติดต่อเรา";
// 	$str_Soundwelc = "media/th.mp3";
// 	$btnmainNorth = "เหนือ";
// 	$btnmainSouth = "ใต้";
// 	$btnmainEast = "ตะวันออก";
// 	$btnmainWest = "ตะวันตก";

// 	$headingNorth = "มุมมองจากทางทิศเหนือ";
// 	//** สมมุติค่ามาจาก Database ที่ได้จากการ Query ***//
// 	$result["DETAIL_TH"] = "นี้คือเนื้อหาภาษาไทย";

// 	$strDetail = $result["DETAIL_TH"];

// 	$north = "media/NORT.WAV";
// // text in north view;
// 	$Chitralada = "พระตำหนักจิตรลดารโหฐาน";
// 	$suanpakkad = "วังสวนผักกาด";
// 	$dusit = "สวนสัตว์ดุสิต";
// 	$NationalLibrary = "‎หอสมุดแห่งชาติ";
	// ?>
<!-- 
						<div class="px-3">
                            <a href="javascript:delay('sub.php')">
                                <button class="btn-custom  fo ">
                                    <div class="d-flex justify-content-center">
                                        <div style="padding: 10px;"><img src="img/compass-n.png" width="60" class="ani-infinite"></div>
                                        <div class="m-auto"><?php echo $placename; ?></div>
                                    </div>
                                </button>
                            </a>
                        </div> -->
	<?php  ?>