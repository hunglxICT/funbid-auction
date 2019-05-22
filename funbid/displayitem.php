<?php
	include('./api.php');
	// create curl resource
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $API_SERVER."/get-item-list-id");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// $output contains the output json
	$output = curl_exec($ch);
	// close curl resource to free up system resources 
	curl_close($ch);
	$id_list = json_decode($output, true);
	foreach ($id_list as $item) {
		// create curl resource
		$ch = curl_init();
		$data = array('itemid' => $item);
		// set url 
		curl_setopt($ch, CURLOPT_URL, $API_SERVER."/get-item-detail");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		// $output contains the output json
		$output = curl_exec($ch);
		// close curl resource to free up system resources 
		curl_close($ch);
		
		$item_info = json_decode($output, true);
		$item_id = $item;
		$item_name = $item_info['name'];
		$item_sellerid = $item_info['sellerid'];
		$item_image = $item_info['image'];
		$item_category = $item_info['category'];
		$item_initprice = $item_info['initprice'];
		$item_createdate = $item_info['createdate'];
		$item_startdate = $item_info['startdate'];
		$item_enddate = $item_info['enddate'];
		$item_iswinner = $item_info['iswinner'];
		$item_currentprice = $item_info['currentprice'];
		$item_currentwinner = $item_info['currentwinner'];

		if ($item_currentwinner != -1)
		{
			$ch = curl_init();
			$data = array('userid' => $item_currentwinner);
			curl_setopt($ch, CURLOPT_URL, $API_SERVER."/get-user-detail");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$output = curl_exec($ch);
			curl_close($ch);
			$winner_info = json_decode($output, true);
			if (isset($winner_info['username']))
				$item_currentwinner = $winner_info['username'];
			else 
				$item_currentwinner = "No one paid this yet!";
		} else $item_currentwinner = "No one paid this yet!";

echo '<div class="auctionbox product update onePerUser     " id="auction_'.$item_id.'" data-bin="1049" data-id="'.$item_id.'" data-no-jumper-limit="5.00" data-mystery-auction-reveal-seconds="">';
echo '<a href="/item/?auction_id='.$item_id.'" class="productname" aria-label="'.$item_name.'">';
echo '<span data-name="'.$item_name.'"></span></a>';
echo '<div class="productImage"><img src="'.$item_image.'?ch=Width%2CDPR&fm=jpg&fit=max&w=171&h=150" alt=""></div>';
echo '<ul>';

echo '<li id="price_'.$item_id.'" class="price discountpromo tooltip_title"  title="Want it? Bid with higher price!">$'.$item_currentprice.'</li>';
echo '<li id="bidder_'.$item_id.'" class="bidder">'.$item_currentwinner.'</li>';
echo '<li id="time_'.$item_id.'" class="time">'.$item_enddate.'</li>';
echo '</ul>';
echo '</div>';
	}
?>	