<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, user-scalable=yes">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css" type="text/css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="app.js" type="text/javascript"></script>
  <title>Tech 2U Work</title>
</head>

<!-- Start -->
<body>
<div class="row" style="margin-bottom:25px; padding:5px;">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="row" style="height:100px; padding-top:25px; margin-bottom:20px; border-bottom:3px inset cyan;">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h3 class="text-center">Tech 2U Dev Test</h3>
			</div>
			<div class="col-md-3"></div>
		</div>
    <!-- Intro -->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 text-center">
				<small>Once you view the html on this page, you will notice that all the css and js are in one page, as well as you will find a good amount of inline css styling in my html.  Please clean up this page as much as possible, connect css and js in external files if needed.  On review we will go over the types of way you made the html a bit cleaner. If something holds you up, come back to it or skip it, its ok if you dont finish each task.  Please reach out with any questions if anything is not clear.</small>
			</div>
			<div class="col-md-1"></div>
		</div>

    <!-- Enter and Display Text section -->
		<hr style="border-top:3px outset cyan;">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="question1_text col-md-12">
						<p class="text-center">Enter text into the input below, create a submit button, and on click/submit have the text you entered in the input field below go to the div on the right side with text labeled (Send Text Here)</p>
            <form action="" method="post">
						<input type="text" name="new_text" placeholder="Enter text here..."/>
            <input type="submit">
            </form>
					</div>
				</div>
				
			</div>
			<div class="col-md-6">
				<div id="new-text-here" class="text-center">
        <?php echo $_POST["new_text"]; ?>
        </div>
			</div>
		</div>

    <!-- Validation section -->
		<hr style="border-top:3px outset cyan;">
		<div class="row">
			<div class="col-md-12"><h3 class="text-center">Form Validation<br><small>Send errors into "alerts()" if validation is not met</small><h3></div>
		</div>
		<div class="form_validation_rows row">
			<div class="col-md-8">
				<h5 class="text-center">Read Only, any edits trigger an error</h5>
        <form action="" method="post" name="editCheck">
				<input type="text" name="read_only_input" value="Read Only Input" placeholder="Read Only" />
			</div>
			<div class="col-md-4 text-center">
				<br>
				<button class="btn btn-success" onclick="noEdit()">Validate</button>
        </form>
			</div>
		</div>
		<div class="form_validation_rows row">
			<div class="col-md-8">
				<h5 class="text-center">Only allow number 0-9, all other characters triggers an error alert</h5>
        <form action="" method="post" name="numCheck">
				<input type="text" name="only_numbers_input" placeholder="Only Numbers" />
			</div>
			<div class="col-md-4 text-center">
				<br>
				<button class="btn btn-success" onclick="onlyNums()">Validate</button>
        </form>
			</div>
		</div><div class="form_validation_rows row">
			<div class="col-md-8">
				<h5 class="text-center">Only allow letters, no numbers or special charatcers or else it triggers an error alert</h5>
        <form action="" method="post" name="alphCheck">
				<input type="text" name="only_letters_input" placeholder="Only Letter" />
			</div>
			<div class="col-md-4 text-center">
				<br>
				<button class="btn btn-success" onclick="onlyLets()">Validate</button>
        </form>
			</div>
		</div>
		<div class="form_validation_rows row">
			<div class="col-md-8">
				<h5 class="text-center">Input cannot be blank, if input is empty on validate, trigger an error alert</h5>
        <form action="" method="post" name="blankCheck">
				<input type="text" name="not_empty_input" placeholder="Not Empty Input" />
			</div>
			<div class="col-md-4 text-center">
				<br>
				<button class="btn btn-success" onclick="noBlank()">Validate</button>
        </form>
			</div>
		</div>

    <!-- Building and Parsing Arrays -->
		<hr style="border-top:3px outset cyan;">
		<div class="row">
			<div class="col-md-12"><h3 class="text-center">Building & Parsing Arrays<br><small>Putting data into a table from array in js</small><h3></div>
		</div>
		<div class="form_validation_rows row">
			<div class="col-md-12">
				<h5 class="text-center">Parse this js array (Array("Ford", "Tesla", "BMW")) into the table below</h5>
				<table id="my-table">
				<tr class="text-center">
					<th>Car One</th>
					<th>Car Two</th>
					<th>Car Three</th>
				</tr>
				<tr class="text-center">
        <?php
        $carray = array("Ford", "Tesla", "BMW");
        foreach ($carray as $value) {
          echo "<td>";
          echo $value;
          echo "</td>";
        }
        ?>
				</tr>
				</table>
			</div>
		</div>
		<div class="form_validation_rows row">
			<div class="col-md-12">
				<h5 class="text-center">Use the array found in html code, loop through the array and enter the values into the table below</h5>
				<table id="my-table2">
        <?php $car_info = [
            ["Ford", 'F1-50', 'red', 85000],
            ["Tesla", 'Model 3', 'white', 10000],
            ["BMW", 'M8', 'black', 103000]
        ];
        foreach ($car_info as list($make, $model, $color, $miles)) {
        echo "<tr class='text-center'>";
          echo "<td>";
          echo $make;
          echo "</td>";
          echo "<td>";
          echo $model;
          echo "</td>";
          echo "<td>";
          echo $color;
          echo "</td>";
          echo "<td>";
          echo $miles;
          echo "</td>";
        echo "</tr>";
        }
        ?>
				</table>
			</div>
		</div>

    <!-- Jquery section -->
		<hr style="border-top:3px outset cyan;">
		<div class="row">
			<div class="col-md-12"><h3 class="text-center">Jquery Click Actions<br><small>Follow the instructions in each section, create each action using jquery</small><h3></div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div id="hide-this-box" class="click_boxes"><div class="jdr_middle_text text-center">Hide This Box</div></div>
			</div>
			<div class="col-md-3">
				<div id="change-box-color" class="click_boxes"><div class="jdr_middle_text text-center">Change My Box <br>To Yellow</div></div>
			</div>
			<div class="col-md-3">
				<div id="change-box-height" class="click_boxes"><div class="jdr_middle_text text-center">Change My Height</div></div>
			</div>
			<div class="col-md-3">
				<div class="click_boxes"><div class="jdr_middle_text text-center">Change to Today's Date<br>(6-29-2021)</div></div>
			</div>
		</div>
		<div class="row" style="margin-top:10px;">
			<div class="col-md-3 text-center">
				<button id="magicBox" class="btn btn-success">Hide Box</button>
			</div>
			<div class="col-md-3 text-center">
				<button id="boxChange" class="btn btn-success">Change Color</button>
			</div>
			<div class="col-md-3 text-center">
				<button id="boxSize" class="btn btn-success">Change Height</button>
			</div>
			<div class="col-md-3 text-center">
				<button class="btn btn-success">Change Date</button> 
			</div>
		</div>

    <!-- AJAX section -->
		<hr style="border-top:3px outset cyan;">
		<div class="row" style="margin-top:25px;">
			<div class="col-md-12"><h3 class="text-center">Using Ajax<br><small>Use ajax to take content from an external source (ext_data.php) and add it into textbox below.</small><h3></div>
		</div>
		<div class="row" style="margin-top:10px;">
			<div class="col-md-12 text-center">
				<textarea class="ajax_ext_data_input" name="ajax_ext_data" type="textbox" rows="4"><?php include 'ext_data.php';?></textarea>
        
			</div>
		</div>
		<hr style="border-top:3px outset cyan;">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 text-center">
				<small>Thank you for participating in this evaluation.  Please contact Jeff Robinson @ jrobinson@tech2u.com when your work is ready for review.</small>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<div class="col-md-3"></div>
	

</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="app.js"></script>
</html>