<?php
/***

 * --- --- --- --- ---
 * JD Sports Fashion plc
 * Khaleel Mughal
 * --- --- --- --- ---
 * #HAWK
 * --- --- --- --- ---

***/

// BUILDER Wings 
// -- When someone is creating a mailer, we need to insert blank data to associate the row
// -- This is huge task and huge blank data mining is done here.. this is the best way to do this and
// -- this is a tiresome task and a complex solution simplified

function create_blank_data($id, $type){
	
	// VARS
		global $dnm;
		$id=$id;
		$type=$type;
		$date=date("Y-m-d H:i:s");
	
	// HERE WE GO
	// -- Big conditionals
		
		// SQL 
		// -- Build the SQL command based on the row needed
		$header_sql= "
		
			INSERT INTO `".$dnm."`.`emails_library_rows_data` (	
				`id`,
				`erowid`,
				`type`,
				`type_name`,
				`type_data`,
				`uid`,
				`stamp`
			)
			VALUES (
				NULL,
				'".$id."',
		";
		
		$footer_sql.="	 '".$_SESSION["userID"]."', '".$date."' ) 	";	
			
			
			
			
			// 1_row
			if($type=="1_row"){
				
				$r1 = $header_sql;
				$r1.= "
					'".$type."',
					'SingleBoxItemURL',
					'http://www.jdsports.co.uk/',
				";
				$r1.=$footer_sql;
				
				$r2 = $header_sql;
				$r2.= "
					'".$type."',
					'SingleBoxItemPictureURL',
					'http://blog.jdsports.co.uk/hawk/template/imgs/jduk/1_row.jpg',
				";
				$r2.=$footer_sql;
							
				mysql_query($r1);
				mysql_query($r2);
				
			}	
			
			
			
			// 2_row_CTA
			if($type=="2_row_CTA"){
				
				$r12_row_CTA = $header_sql;
				$r12_row_CTA.= "
					'".$type."',
					'DoubleBoxItemURL1',
					'http://www.jdsports.co.uk/',
				";
				$r12_row_CTA.=$footer_sql;
				
				$r22_row_CTA = $header_sql;
				$r22_row_CTA.= "
					'".$type."',
					'DoubleBoxItemPictureURL1',
					'http://blog.jdsports.co.uk/hawk/template/imgs/jduk/2_row_CTA_a.png',
				";
				$r22_row_CTA.=$footer_sql;
							
					mysql_query($r12_row_CTA);
					mysql_query($r22_row_CTA);
					
					$r12_row_CTAb = $header_sql;
					$r12_row_CTAb.= "
						'".$type."',
						'DoubleBoxItemURL2',
						'http://www.jdsports.co.uk/',
					";
					$r12_row_CTAb.=$footer_sql;
					
					$r22_row_CTAb = $header_sql;
					$r22_row_CTAb.= "
						'".$type."',
						'DoubleBoxItemPictureURL2',
						'http://blog.jdsports.co.uk/hawk/template/imgs/jduk/2_row_CTA_b.png',
					";
					$r22_row_CTAb.=$footer_sql;
								
					mysql_query($r12_row_CTAb);
					mysql_query($r22_row_CTAb);
				
				
			}	
			
			
			
			// 1_row_cta
			if($type=="1_row_CTA"){
				
				$r1 = $header_sql;
				$r1.= "
					'".$type."',
					'SingleCTAFill',
					'#a22e3b',
				";
				$r1.=$footer_sql;							
				mysql_query($r1);
				
				$r2 = $header_sql;
				$r2.= "
					'".$type."',
					'SingleCTAColour',
					'#fff',
				";
				$r2.=$footer_sql;							
				mysql_query($r2);
				
				$r3 = $header_sql;
				$r3.= "
					'".$type."',
					'SingleCTATopTxt',
					'Shop Now',
				";
				$r3.=$footer_sql;							
				mysql_query($r3);
				
				$r4 = $header_sql;
				$r4.= "
					'".$type."',
					'SingleCTABottomTxt',
					'For all your latest styles',
				";
				$r4.=$footer_sql;							
				mysql_query($r4);
				
				$r5 = $header_sql;
				$r5.= "
					'".$type."',
					'SingleCTAURL',
					'http://www.jdsports.co.uk/page/offers/',
				";
				$r5.=$footer_sql;							
				mysql_query($r5);
				
				
				
			}	
			
			// html_row
			if($type=="html_row"){
				
				$html_temp = '<img src="http://blog.jdsports.co.uk/hawk/template/imgs/jduk/html.jpg" border="0" style="width:100%">';
				
				$r1_html = $header_sql;
				$r1_html.= "
					'".$type."',
					'HTMLBoxEnter',
					'".$html_temp."',
				";
				$r1_html.=$footer_sql;
				mysql_query($r1_html);
				
			}	
			
			
			// 2_row
			if($type=="2_row"){
				
				$r1 = $header_sql;
				$r1.= "
					'".$type."',
					'a2_row_1_PLU',
					'148197',
				";
				$r1.=$footer_sql;
				
				$r2 = $header_sql;
				$r2.= "
					'".$type."',
					'a2_row_2_PLU',
					'011986',
				";
				$r2.=$footer_sql;
				
				$r3 = $header_sql;
				$r3.= "
					'".$type."',
					'a2_row_1_TopTxt',
					'England Rugby 2014',
				";
				$r3.=$footer_sql;
				
				$r4 = $header_sql;
				$r4.= "
					'".$type."',
					'a2_row_2_TopTxt',
					'Emporio Armani',
				";
				$r4.=$footer_sql;
				
				$r5 = $header_sql;
				$r5.= "
					'".$type."',
					'a2_row_1_BottomTxt',
					'Home Jersey',
				";
				$r5.=$footer_sql;
				
				$r6 = $header_sql;
				$r6.= "
					'".$type."',
					'a2_row_2_BottomTxt',
					'EA7 Block Fleece',
				";
				$r6.=$footer_sql;
				
				$r7 = $header_sql;
				$r7.= "
					'".$type."',
					'a2_row_1_Price',
					'55',
				";
				$r7.=$footer_sql;
				
				$r8 = $header_sql;
				$r8.= "
					'".$type."',
					'a2_row_2_Price',
					'95',
				";
				$r8.=$footer_sql;
				
				mysql_query($r1);				mysql_query($r2);
				mysql_query($r3);				mysql_query($r4);
				mysql_query($r5);				mysql_query($r6);
				mysql_query($r7);				mysql_query($r8);
			}
			
			
			
			
			
			
			
			
			
			
			
			// 2_row_sale
			if($type=="2_row_sale"){
				
				$r1 = $header_sql;
					$r1.= "
						'".$type."',
						'Sale_a2_row_1_PLU',
						'097838',
						";
						$r1.=$footer_sql;
				
				$r2 = $header_sql;
					$r2.= "
						'".$type."',
						'Sale_a2_row_1_TopTxt',
						'adidas',
						";
						$r2.=$footer_sql;
				
				$r3 = $header_sql;
					$r3.= "
						'".$type."',
						'Sale_a2_row_1_BottomTxt',
						'Stinger Pants',
						";
						$r3.=$footer_sql;
				
				$r4 = $header_sql;
					$r4.= "
						'".$type."',
						'Sale_a2_row_1_Price',
						'25',
						";
						$r4.=$footer_sql;
				
				$r5 = $header_sql;
					$r5.= "
						'".$type."',
						'Sale_a2_row_1_WasPrice',
						'30',
						"; 
						$r5.=$footer_sql;
				
						mysql_query($r1);mysql_query($r2);mysql_query($r3);	mysql_query($r4);mysql_query($r5);	
				
				$r6 = $header_sql;
					$r6.= "
						'".$type."',
						'Sale_a2_row_2_PLU',
						'143520',
						";
						$r6.=$footer_sql;
				
				$r7 = $header_sql;
					$r7.= "
						'".$type."',
						'Sale_a2_row_2_TopTxt',
						'Brookhaven',
						";
						$r7.=$footer_sql;
				
				$r8 = $header_sql;
					$r8.= "
						'".$type."',
						'Sale_a2_row_2_BottomTxt',
						'Simon T-Shirt',
						";
						$r8.=$footer_sql;
				
				$r9 = $header_sql;
					$r9.= "
						'".$type."',
						'Sale_a2_row_2_Price',
						'7',
						";
						$r9.=$footer_sql;
				
				$r10 = $header_sql;
					$r10.= "
						'".$type."',
						'Sale_a2_row_2_WasPrice',
						'10',
						";
						$r10.=$footer_sql;
				
						mysql_query($r6);mysql_query($r7);mysql_query($r8);	mysql_query($r9);mysql_query($r10);	
				
				
				
				
				
					
			}
			
			
			
			
			
			
			
			// 3_row
			if($type=="3_row"){
				
				$r1 = $header_sql;
				$r1.= "
					'".$type."',
					'a3_row_1_PLU',
					'002521',
				";
				$r1.=$footer_sql;
				
				$r2 = $header_sql;
				$r2.= "
					'".$type."',
					'a3_row_2_PLU',
					'002545',
				";
				$r2.=$footer_sql;
				
				$r2b = $header_sql;
				$r2b.= "
					'".$type."',
					'a3_row_3_PLU',
					'139376',
				";
				$r2b.=$footer_sql;
				
				
				
				
				
				
				
				
				
				$r3 = $header_sql;
				$r3.= "
					'".$type."',
					'a3_row_1_TopTxt',
					'K-Swiss',
				";
				$r3.=$footer_sql;
				
				$r4 = $header_sql;
				$r4.= "
					'".$type."',
					'a3_row_2_TopTxt',
					'K-Swiss',
				";
				$r4.=$footer_sql;
				$r4b = $header_sql;
				$r4b.= "
					'".$type."',
					'a3_row_3_TopTxt',
					'K-Swiss',
				";
				$r4b.=$footer_sql;
				
				
				
				
				
				
				
				
				
				
				$r5 = $header_sql;
				$r5.= "
					'".$type."',
					'a3_row_1_BottomTxt',
					'Rinzer Red',
				";
				$r5.=$footer_sql;
				
				$r6 = $header_sql;
				$r6.= "
					'".$type."',
					'a3_row_2_BottomTxt',
					'Rinzer Black',
				";
				$r6.=$footer_sql;
				$r6x = $header_sql;
				$r6x.= "
					'".$type."',
					'a3_row_3_BottomTxt',
					'Rinzer Black',
				";
				$r6x.=$footer_sql;
				
				
				
				
				
				
				
				
				
				
				
				$r7 = $header_sql;
				$r7.= "
					'".$type."',
					'a3_row_1_Price',
					'70',
				";
				$r7.=$footer_sql;
				
				$r8 = $header_sql;
				$r8.= "
					'".$type."',
					'a3_row_2_Price',
					'70',
				";
				$r8.=$footer_sql;
				
				$r8b = $header_sql;
				$r8b.= "
					'".$type."',
					'a3_row_3_Price',
					'70',
				";
				$r8b.=$footer_sql;
				
				
				mysql_query($r1);mysql_query($r2);
				mysql_query($r3);mysql_query($r4);
				
				mysql_query($r5);mysql_query($r6);
				mysql_query($r7);mysql_query($r8);
								
				mysql_query($r8b);mysql_query($r2b);
				mysql_query($r6x);mysql_query($r4b);
				
				
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				// 3_row_sale
			if($type=="3_row_sale"){
				
				$sr1 = $header_sql;
				$sr1.= "
					'".$type."',
					'Sale3Row_a2_row_1_PLU',
					'002521',
				";
				$sr1.=$footer_sql;
				mysql_query($sr1);
				
				$sr2 = $header_sql;
				$sr2.= "
					'".$type."',
					'Sale3Row_a2_row_2_PLU',
					'002545',
				";
				$sr2.=$footer_sql;
				mysql_query($sr2);
				
				$sr2b = $header_sql;
				$sr2b.= "
					'".$type."',
					'Sale3Row_a2_row_3_PLU',
					'139376',
				";
				$sr2b.=$footer_sql;
				mysql_query($sr2b);
				
				
				
				
				
				
				
				
				$sr3 = $header_sql;
				$sr3.= "
					'".$type."',
					'Sale3Row_a2_row_1_TopTxt',
					'K-Swiss',
				";
				$sr3.=$footer_sql;
				mysql_query($sr3);
				
				$sr4 = $header_sql;
				$sr4.= "
					'".$type."',
					'Sale3Row_a2_row_2_TopTxt',
					'K-Swiss',
				";
				$sr4.=$footer_sql;
				mysql_query($sr4);
				
				$sr4b = $header_sql;
				$sr4b.= "
					'".$type."',
					'Sale3Row_a2_row_3_TopTxt',
					'K-Swiss',
				";
				$sr4b.=$footer_sql;
				mysql_query($sr4b);
				
				
				
				
				
				
				
				
				
				$sr5 = $header_sql;
				$sr5.= "
					'".$type."',
					'Sale3Row_a2_row_1_BottomTxt',
					'Rinzer Red',
				";
				$sr5.=$footer_sql;mysql_query($sr5);
				
				$sr6 = $header_sql;
				$sr6.= "
					'".$type."',
					'Sale3Row_a2_row_2_BottomTxt',
					'Rinzer Black',
				";
				$sr6.=$footer_sql;mysql_query($sr6);
				$sr6x = $header_sql;
				$sr6x.= "
					'".$type."',
					'Sale3Row_a2_row_3_BottomTxt',
					'Rinzer Black',
				";
				$sr6x.=$footer_sql;mysql_query($sr6x);
				
				
				
				
				
				
				
				$sr7 = $header_sql;
				$sr7.= "
					'".$type."',
					'Sale3Row_a2_row_1_Price',
					'70',
				";
				$sr7.=$footer_sql;
				mysql_query($sr7);
				$sr8 = $header_sql;
				$sr8.= "
					'".$type."',
					'Sale3Row_a2_row_2_Price',
					'70',
				";
				$sr8.=$footer_sql;
				mysql_query($sr8);
				
				
				$sr8bxxxSale = $header_sql;
				$sr8bxxxSale.= "
					'".$type."',
					'Sale3Row_a2_row_3_Price',
					'70',
				";
				$sr8bxxxSale.=$footer_sql;
				mysql_query($sr8bxxxSale);
				
				// was prices				
				
				$sr8bxx = $header_sql;
				$sr8bxx.= "
					'".$type."',
					'Sale3Row_a2_row_1_WasPrice',
					'90',
				";
				$sr8bxx.=$footer_sql;
				mysql_query($sr8bxx);
				
				$sr8bsawe = $header_sql;
				$sr8bsawe.= "
					'".$type."',
					'Sale3Row_a2_row_2_WasPrice',
					'80',
				";
				$sr8bsawe.=$footer_sql;
				mysql_query($sr8bsawe);
				
				$sr8r8bsawer8bsaweb = $header_sql;
				$sr8r8bsawer8bsaweb.= "
					'".$type."',
					'Sale3Row_a2_row_3_WasPrice',
					'80',
				";
				$sr8r8bsawer8bsaweb.=$footer_sql;
				mysql_query($sr8r8bsawer8bsaweb);
				
				
				
				
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
} // END























function create_blank_data_delivery($id){
	
	// VARS
		global $dnm;
		$id=$id;
		$date=date("Y-m-d H:i:s");
		
		
		
	// SQL MODEL
		
	
	// HERE WE GO
	// -- Big conditionals
		
		// SQL 
		// -- Build the SQL command based on the row needed
		$header_sql= "
		
			INSERT INTO `".$dnm."`.`emails_library_rows_data` (	
				`id`,
				`erowid`,
				`type`,
				`type_name`,
				`type_data`,
				`uid`,
				`stamp`
			)
			VALUES (
				NULL,
				'".$id."',
		";
		
		$footer_sql.="	 '".$_SESSION["userID"]."', '".$date."' ) 	";	
			
			// delivery_row
				
				$r1 = $header_sql;
				$r1.= "'delivery_row','TopDeliveryMessage','Free UK Standard Delivery',";
				$r1.=$footer_sql;
				
				$r2 = $header_sql;
				$r2.= "'delivery_row','BottomDeliveryMessage','on orders over &pound;60',";
				$r2.=$footer_sql;
				
				$r3 = $header_sql;
				$r3.= "'delivery_row','BlueHex','#1083c7',";
				$r3.=$footer_sql;
				
				$r4 = $header_sql;
				$r4.= "'delivery_row','BlueHexLinkColour','#fff',";
				$r4.=$footer_sql;
				
				mysql_query($r1);
				mysql_query($r2);
				mysql_query($r3);
				mysql_query($r4);

		
} // END