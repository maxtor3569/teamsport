<?php
	
	// Create connection
	$con = mysqli_connect("127.0.0.1","root","M@xim4log","symfony");

	// Check connection
	if (mysqli_connect_errno($con))
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$offset = (isset($_POST['offset']) && $_POST['offset']!='') ? $_POST['offset'] : '';
	
	$limit = $offset + 5;
	mysqli_query($con,'SET NAMES utf8');
	$query ="select * from news ORDER BY id DESC limit ".$offset.", 5";
	//echo $query;
	$qry1 = mysqli_query($con,$query);
	
	
	while($result = mysqli_fetch_object($qry1)){ 
		//print_r($result);
		//Load profile image...
		$photoResult = mysqli_query($con,"select * from Image WHERE profile_id = ".$result->author_id." ORDER BY id DESC LIMIT 1");
		$photoRow = mysqli_fetch_array($photoResult);
		$alt = $photoRow['alt'];
		$url = $photoRow['url'];
		$profile = mysqli_query($con,"select * from profile WHERE id = ".$result->author_id);
		$profileRow = mysqli_fetch_object($profile);
		
		//if ($result->id == 5) return '';
?>
  
	<div class="pager" style="clear:both;border-bottom:1px solid #eee;padding:20px;min-height: 100px">
		<div style="float:left">
			<a href="/ho-so-cua-toi?id=<?php echo $profile->author_id;?>">
			<img src="../uploads/img/<?php if ($photoRow == null) echo 'img_profile_default.jpg'; else echo $photoRow['id'].".".$url; ?>" style="cursor:pointer;width:60px;height:60px">
			</a>
		</div>
		
		<div class="contentLine" style="margin-left:80px">
			<div style="font-weight:bold"><?php echo $profileRow->prenom; ?> <?php echo $profileRow->nom; ?> <?php if ($result->doingSports == 1):?><span style="float:right">09/11/2013 11:11<?php endif;?></span></div>
			
			<?php if ($result->doingSports != 1): ?>
				<span id="<?php echo $result->id; ?>"><?php echo $result->content; ?></span>
			<?php else: ?>
				<?php switch($result->sport_id)
				{
					case 1:
						$url = '/images/icons/soccer-none-select.png';
						break;
					case 2:
						$url = '/images/icons/badminton-none-select.png';
						break;
				}
				?>
				<img src="<?php echo $url; ?>" style="width:50px;height:50px;float:left;">
				<div style="position:relative;top:15px"><b>Nơi :</b> <?php echo $result->content;?></div>
				<div id="participant<?php echo $result->id; ?>" style="margin-top:50px">
					<div style="float:left;">Người chơi:</div>
					<?php
						$participant = mysqli_query($con,"select * from profile_news WHERE news_id = ".$result->id);
						
						while ($participantRow = mysqli_fetch_object($participant)):
							$photoResult = mysqli_query($con,"select * from Image WHERE profile_id = ".$participantRow->profile_id." ORDER BY id DESC LIMIT 1");
							$photoRow = mysqli_fetch_array($photoResult);
							$url = $photoRow['url'];
					?>
						<div id="participantImage<?php echo $result->id; ?>">
							<a href="/ho-so-cua-toi?id=<?php echo $participantRow->profile_id;?>">
								<img src="../uploads/img/<?php if ($photoRow == null) echo 'img_profile_default.jpg'; else echo $photoRow['id'].".".$url; ?>" style="width:30px;height:30px;max-width:30px;max-height:30px;cursor:pointer;">
							</a>
						</div>
						
						<?php endwhile; ?>
						<div style="">
							<a href="#map<?php echo $result->id; ?>" class="fancy" onclick="participate(<?php echo $result->id; ?>);">
							<button style="background:#00a751;color:white;float:right">Tham gia</button>
							</a>
						</div>
				</div>
				<script>
					// ADD MARKERS TO THE MAP
					jQuery(document).ready(function() {
					var id = "<?php echo $result->id; ?>";
					var button = $('#participantImage'+id).html();
						GMaps.geocode({
						  address: '<?php echo $result->content; ?>',
						  callback: function(results, status) {
							if (status == 'OK') {
							  var latlng = results[0].geometry.location;
							  map.setCenter(latlng.lat(), latlng.lng());
							  map.setZoom(11);
							  map.addMarker({
								lat: latlng.lat(),
								lng: latlng.lng(),
								infoWindow: { 
								content:'<div id="mapParticipant'+id+'" style="height:100px;width:150px" >'+button+' <br /><?php echo $result->content; ?></div>'
								}
							  });
							}
						  }
						});
						// This add participant into the div for the map
						
						  
					
					});
						
				</script>
			<?php endif; ?>
			<!-- COMMENTS PART -->
					
			<div id="comments"></div>
			<textarea class="text-holder" placeholder="Bình luận..." id="message" data-reactid="<?php echo $result->id; ?>" style="width:500px;height:20px; resize: none;"></textarea>	

		</div>
	</div>
	
	
	
<?php } ?>