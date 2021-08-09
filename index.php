<html>
	<head>
		<title>Math FLashcards</title>
	</head>
	<body>
		<center>

	<h1>Addition</h1>

	<h1>
		<?php

		$num1 = rand(1,10);
		$num2 = rand(1,10);

		echo $num1 . " + " . $num2


		?>
    </h1>
    <br/><br/>

        <?php
        if (isset($_POST["answer"])){ 
        $correct_answer = $_POST["num1"] + $_POST["num2"];
       		
       		if ($_POST["answer"] == $correct_answer) {
        	echo "Correct! " . $_POST["num1"] . " + " . $_POST["num2"] . " = " . $_POST["answer"];
        	} else echo "Wrong! " . $_POST["num1"] . " + " . $_POST["num2"] . " = " . $correct_answer . " not " . $_POST["answer"];

        } else {}
        ?>

    <br/><br/>

    <form action="/php-course/index.php" method="post">
            <input name="num1" type="hidden" value="<?php echo $num1 ?>">
            <input name="num2" type="hidden" value="<?php echo $num2 ?>">
        Answer: <input name="answer"> <button>Submit</button> <button>New Card</button>
    </form>


        </center>
    </body>