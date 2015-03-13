<?php
		global $wpdb;
		$action=$_GET['action'];
		$camp_id=$_GET['camp_id'];
		if($action && $camp_id)
		{
			switch($action)
			{
				case 'delete':
				{
					#deleteing...
					$wpdb->query("DELETE FROM ".ADGURU_ADS_TABLE." WHERE id=".$camp_id);
					$wpdb->query("DELETE FROM ".ADGURU_LINKS_TABLE." WHERE ad_id=".$camp_id);	
					echo '<meta http-equiv="refresh" content="0;URL=?page=adguru_banners">';
				break;
				}
			}
		}#end of if($action && $camp_id)
		 if(isset($_GET['skey']))
		 {
			$keyword_list=$this->get_keywords_from_string(stripslashes($_GET['skey']));
			if($keyword_list){$search=true;}
		}
		if($search)
		{
			
			$tot_key=count($keyword_list);
			$i=0;
			$condition=" ";
			foreach($keyword_list as $key)
			{
			$i++;
			$condition.="ad_type='banner' AND name LIKE '%".esc_sql($key)."%' ";
				if($i!=$tot_key){$condition.=" AND ";}
			}
			
			$SQL="SELECT * FROM ".ADGURU_ADS_TABLE." WHERE ".$condition." ORDER BY id DESC";
		}
		else #if($search)
		{
		
			$rpp=20; #Record Per page;.
			$npage=1; #current page number
			$offset=0;
			if(isset($_GET['npage'])){$npage=intval($_GET['npage']); $npage=abs($npage);}
			if(!$npage){$npage=1;}
			$offset=($npage-1)*$rpp;
			$total_record= $wpdb->get_var("SELECT COUNT(*) AS total_record FROM ".ADGURU_ADS_TABLE." WHERE ad_type='banner'");
			$SQL=" SELECT * FROM ".ADGURU_ADS_TABLE." WHERE ad_type='banner' ORDER BY id DESC LIMIT ".$offset." , ".$rpp;
		}#end if($search)
		
		$camps=$wpdb->get_results($SQL, ARRAY_A);
		
		?>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
				//select input field text on click
				jQuery(".all_camp_table input[type=text]").click(function() {jQuery(this).select();});	
				$( "#ad_code_modal" ).dialog({
				height: 230,
				width: 600,
				modal: true,
				autoOpen: false,
				buttons: {
					Cancel: function() {$( this ).dialog( "close" );}
					}		
				
				});//END DIALOG
						
			}); //end document load
				
	
			function show_ad_code_modal(adid , name)
			{
			 
			 var php_code="&lt;?php if(function_exists('adguru_ad')){adguru_ad("+adid+");} ?&gt;";
			 var shortcode='[adguru adid="'+adid+'"]';
			 jQuery("#ad_code_php").html(php_code);
			 jQuery("#ad_code_shortcode").html(shortcode);
			 jQuery( "#ad_code_modal" ).dialog( { title: "Get Code for : "+name });
			 jQuery( "#ad_code_modal" ).dialog( "open" );
			return false;
			}			
		</script>
		
		<table width="100%">
		<tr><td  width="40%">&nbsp;
			
		</td>
		<td width="60%" align="right">
			<form action="admin.php" method="get">
			<?php if($search){?><a href="?page=adguru_banners">Clear Search</a><?php } ?>	
			<input type="hidden" name="page" value="adguru_banners" />
			<input type="text" name="skey" value="<?php echo stripslashes($_GET['skey'])?>" class="sbox" size="40" /><input type="submit" value="Search" class="button" /></form>			
		</td>
		</tr>
		</table>
					

		<div id="ad_code_modal" title="Get Code">
			<div id="ad_code_content">
					<strong>PHP CODE</strong><BR />
					<code id="ad_code_php">	</code><BR /><BR />
					<strong>SHORTCODE</strong><BR />
					<code id="ad_code_shortcode"></code>
				<!--content will generated by javascript-->
			</div>			
		</div>
	
	    <style type="text/css">
			.all_camp_table tr:hover{background:#FFFFFF;}
		</style>

		<table class="widefat all_camp_table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th  width="120">Size</th>
					<th  width="70">Status</th>
					<th  width="190" style="text-align:center;">Controls</th>
				</tr>
			</thead>
				<?php foreach($camps as $camp){ 
							 $ad_id=$camp['id'];
				
				?>
				<tr>
					<td><strong><?php echo $camp['id']; ?></strong></td>
					<td><strong><?php echo $camp['name']; ?></strong></td>
					<td><?php echo $camp['width']."x".$camp['height']?></td>
					<td><?php echo ($camp['active'])?'Active':'Deactive'; ?></td>
								
					<td align="center">
					<a class="camp_control_link" href="#" onclick="return show_ad_code_modal(<?php echo $ad_id; ?>, '<?php echo $camp['name']; ?>')">Get Code</a> | 
					<a class="camp_control_link camp_control_link_red" title="Preview" href="?page=adguru_banners&tab=2&action=copy&cp_from_id=<?php echo $ad_id;?>">Copy</a> | 
					<a class="camp_control_link" href="?page=adguru_banners&tab=2&cid=<?php echo $ad_id; ?>">Edit</a> | 
					<a class="camp_control_link camp_control_link_red" href="?page=adguru_banners&tab=1&action=delete&camp_id=<?php echo $ad_id;?>" onclick="return confirm('Are you sure you want to delete this banner?')">Delete</a>
					
					</td>
				</tr>
				<?php }?>
		</table>

			<?php if(!count($camps)){?><div style="text-align:center; color:#cc0000; font-weight:normal; margin-top: 5px;"><?php echo ($search)? "No banner containing your search terms were found.":"No existing banner. Please <a href=\"?page=adguru_banners&tab=2\">add a new banner</a>." ?></div><?php }?>
			<?php if(!$search){$this->print_page_navi($total_record,$npage,$rpp, "admin.php?page=adguru_banners&tab=1");} ?>
			
		<br /><br /><br />
		<table class="widefat">
			<thead>
				<tr><th>Usage</th></tr>
			</thead>
			<tr>
				<td>
					To show any banner ad in your site, go to <a href="admin.php?page=adguru_bannerzonelinks" target="_blank">Banner to Zone settings</a> page and set ad to appropiate zone. 
					<br /><strong> OR</strong><br />
					Add following php code anywhere in your site front-end pages. Replace the word <strong>'ad_id'</strong> with the <strong>id</strong> of the banner ad you want to show<br />
					<code>
						&lt;?php if(function_exists('adguru_ad')){adguru_ad(ad_id);} ?&gt;
					</code><br />
					<strong>Example:</strong><br />
					<code>
						&lt;?php if(function_exists('adguru_ad')){adguru_ad(1);} ?&gt;
					</code>

					<br /><br /><strong> OR</strong><br />
					Use following shortcode in your post content<br />
					<code>
						[adguru adid="ad_id"]
					</code><br />
					<strong>Example:</strong><br />	
					<code>
						[adguru adid="1"]
					</code>					
					<br /><br /><br />
				</td>
			</tr>
		</table>