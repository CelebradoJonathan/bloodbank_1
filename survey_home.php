<?php
session_start();
include("connections.php");
?>

<html>
<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-1.12.4.js"> </script>
    <script>

      $(document).ready(function(){
        fetch_questions();

          function fetch_questions()
          {
            var action = "fetch";
            $.ajax({
              url:"fetch_questions.php",
              method:"POST",
              data:{action:action},
              success:function(data)
              {
                $('#questions').html(data);
              }
            })
          }

      })

    </script>
</head>

<body>
  <div id ="questions">

  </div>

  <div id = "answers_validation" style="display : none;">

  </div>

  <script>
/* $(document).ready(function(){
  	$("button[name='submit_answers']").click(function(){
  			var question_id = $().attr("id");
  			var answer_yn = $("answer_yn" ).val();
  			var answer_text = $("answer_text" ).val();


  	})
  })*/
  $(document).ready(function(){
		$("button[name = 'submit_answers']").click(function(){
			var question_id = $("input[type='hidden'][name = 'hiddenQuestion_ID']").attr("id");
			var answer_yn = $("#answer_yn"+ question_id).val();
			var answer_text = $("#answer_text"+ question_id).val();

			console.log(answer_yn);
		});
	});
  </script>

</body>
</html>
