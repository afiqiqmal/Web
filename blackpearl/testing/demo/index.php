 <!DOCTYPE html>
<html>
	<title>Datatable Demo2 | CoderExample</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
		<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="../../js/dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" >
			$(document).ready(function() {
				var dataTable = $('#employee-grid').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"employee-grid-data.php", // json datasource
						type: "post"
					},
					"iDisplayLength": 5,
			        "aLengthMenu": [[5, 10], [5, 10]],
			        "language": {
			            "emptyTable": "No Previous Purchase"
			        }
				} );
				$("#employee-grid_filter").css("display","none");  // hiding global search box
				$('.search-input-text').on( 'keyup click', function () {   // for text boxes
					var i =$(this).attr('data-column');  // getting column index
					var v =$(this).val();  // getting search input value
					if(v == "All")
						v="";
					dataTable.columns(i).search(v).draw();
				} );
				$('.search-input-select').on( 'change', function () {   // for select box
					var i =$(this).attr('data-column');  
					var v =$(this).val();  
					dataTable.columns(i).search(v).draw();
				} );
				
				
				
			} );
		</script>
		<style>
			div.container {
			    margin: 0 auto;
			    max-width:760px;
			}
			div.header {
			    margin: 100px auto;
			    line-height:30px;
			    max-width:760px;
			}
			body {
			    background: #f7f7f7;
			    color: #333;
			    font: 90%/1.45em "Helvetica Neue",HelveticaNeue,Verdana,Arial,Helvetica,sans-serif;
			}
		</style>
	</head>
	<body>
		<div class="header"><h1>DataTable (Server side) Custom Column Search </h1></div>
		<div class="container">
			<table id="employee-grid"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
					<thead>
						<tr>
							<th>food_id</th>
							<th>name</th>
							<th>type</th>
							<th>price</th>
						</tr>
					</thead>
					<thead>
						<tr>
							<td><input type="text" data-column="0" class="search-input-text"></td>
							<td><input type="text" data-column="1"  class="search-input-text"></td>
							<td><input type="button" data-column="2" class="search-input-text" value="Food">
							<input type="button" data-column="2" class="search-input-text" value="All"></td>
							<td>
								<select data-column="3" class="search-input-select">
									<option value="">(Select a range)</option>
									<option value="1-2">1-2</option>
									<option value="3-4">3-4</option>
								</select>
							</td>
						</tr>
					</thead>
			</table>
		</div>
	</body>
</html>
