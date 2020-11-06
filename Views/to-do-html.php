<?php 
	// global $wpdb;
	// $_table = "{$wpdb->prefix}list_to_do";
	// $sql 	= "SELECT * FROM {$_table} ORDER BY `id` DESC";
	// $items 	= $wpdb->get_results( $sql );
	use jakaria\To_Do_List\Ajax;
	$ajax = new Ajax;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>TO DO LIST</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<?php echo '<link rel="stylesheet" type="text/css" href="/'. TDL_DIR .'/assets/style.css">'; ?>
</head>
<body>
	<div class="container">
		<div class="tdl-container">
			<div class="card">
				<div class="card-body">
					<h3 class="heading">To Do List</h3>
					<div id="list-inputs" class="header">
					  <form id="ltd-form">
					  	<input type="hidden" name="action" value="ltd-add-item">
					  	<input type="text" name="item" id="item" class="form-control" placeholder="Whats need to be done ?">
					  </form>
					</div>
					<ul id="to-do-lists">
					  <?php 
					  	// if ( !empty( $items ) ) {
					  	// 	foreach ( $items as $key => $item ) {
					  	// 		$checked = $item->status == 'completed' ? 'checked' : '';
					  	// 		echo "
					  	// 			<li class='{$checked}' data-id='{$item->id}'>
					  	// 				<input type='checkbox' class='checkbox'>
					  	// 				<input class='text' value='{$item->item}' >
					  	// 				<button class='rmv-btn' >&times;</button>
					  	// 			</li>
					  	// 		";
					  	// 	}
					  	// }
					  ?>
					</ul>
					<div class="ltd-nav">
						<div class="count"></div>
						<div class="filter">
							<span class="ltd-button" data-show='all' >All</span>
							<span class="ltd-button" data-show='active' >Active</span>
							<span class="ltd-button" data-show='completed' >Completed</span>
						</div>
						<div class="clear-completed">Clear completed</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script >
		var ajaxurl = "<?php echo '/'. TDL_DIR . '/includes/Action.php' ?>"
	</script>
	<script src="/<?php echo TDL_DIR ?>/assets/script.js"></script>
</body>
</html>