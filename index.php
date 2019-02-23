<!DOCTYPE html><html>
<head>
	<title>Query</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.0-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styling.css">
	<script src="jquery-3.3.1.js"></script>
	<script type="text/javascript" src="bootstrap-4.3.0-dist/js/bootstrap.js"></script>

	<style>
        .notes{
            margin: 100px;
        }
        .noteheader{
            border: 1px solid grey;
            border-radius: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            padding: 0 10px;
            background: linear-gradient(#FFFFFF,#ECEAE7);
        }

      </style>
</head>
<body>
	<div class="row">
		<div class="col-md-6">
			<div id="my_query"></div>
		</div>
		<div class="col-md-6">
			<div class="container">
				<div class="row">
					<div class="col-md-3"><div class="btn btn-success d-flex" id="new_query_btn">New Query</div></div>
				
				<div id="msg" class="alert alert-dark col-md-9" role="alert">Message Alert</div>
				</div>
				<div id="query_form"></div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="load_query.js"></script>
</body>
</html>



