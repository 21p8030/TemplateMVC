<!DOCTYPE html>
<html>
	<head>
		<title>Demo MVC</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<br />
			
			<h3 align="center">MVC Demo</h3>
            <br />
            <?php
             $response = $data['response'];
             ?>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                    $i = 0;
                    foreach($response as $test){
                        echo '<tr>';
                        echo '<td>'.$response[$i]['firstname'].'</td>';
                        echo '<td ALIGN="RIGHT">'.$response[$i]['lastname'].'<t/d>';
                        echo '</td>';
                        $i++;
                    }
                    ?>
                    </tbody>
				</table>
			</div>
		</div>
	</body>
</html>


