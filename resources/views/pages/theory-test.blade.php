@extends('main')
@section('title','Corporate Services')
@section('active','active')
@section('content')

<style type="text/css">
	.title{
		margin-top: 10px;
	}


	/* Quiz Classes */
 .quizContainer {
    background-color: #fff;
    padding: 20px;
    border-radius: 6px;
    width: 75%;
    margin: auto;
    -moz-box-shadow: 10px 10px 5px #888;
    -webkit-box-shadow: 10px 10px 5px #888;
    box-shadow: 10px 10px 5px #888;
    position: relative;
    margin-top: 30px;
    display: none;
   
}
.quizContainer_info p{
	font-size: 18px;
    margin-left: 10px;
}




.question {
    font-size: 1.5em;
    width: 90%;
    height: auto;
    margin: auto;
    border-radius: 6px;
    background-color: lightgrey;
    text-align: center;
    margin-bottom: 20px;
    margin-top: 20px;
    padding: 10px;
    color: #f28631;
}
.quizMessage {
    background-color: #f1f1f1;
    border-radius: 6px;
    width: 30%;
    margin: auto;
    text-align: center;
    /*padding: 2px;*/
    color: red;
    margin-top: 10px;
    margin-bottom: 24px;
}
.choiceList {
    font-family: Courier, serif;
    color: blueviolet;
    margin-bottom: 15px;
    font-size: 20px;
    text-align: left;
    margin-left: 15px;
}

.choiceList input[type="radio"], input[type="checkbox"]{
	    margin: 4px 11px 0;
}
.result {
    width: 90%;
    height: auto;
    border-radius: 6px;
    /*background-color: #d3d3d3;*/
    margin: auto;
    text-align: center;
    font-size: 20px;
    padding: 10px;
    /* font-family: 'Rokkitt', serif; */
    margin-bottom: 10px;
    color: #333;
}
/* End of Quiz Classes */
</style>
<!-- Page Banner Area
============================================ -->
<div class="page-banner-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>Theory Test</h1>
				<ul>
					<li><a href="#">home</a></li>
					<li><span> Theory Test</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<!-- About Area
============================================ -->
<div id="feature-area" class="feature-area bg-gray pt-90 pb-90" style="background: #fff;">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-xs-12 mb-45">
				<h3 class="heading">Theory Tests</h3>
				<div class="excerpt">
					<p>Driving and Vocational Training Institute in UAE since 2007</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>

			<p style="font-size: 18px;line-height: 33px;">
				Civil Vocational Training Institutes / Civil Driving Institute (Civil Institutes) celebrates 9 years of successfully learner & advanced driver training and driver road risk reduction in the UAE and the greater GCC region. 
			</p>
		</div>
		
	</div>
</div>


<div id="faq-area" class="faq-area bg-gray pt-90 pb-60">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-xs-12 mb-45">
				<h3 class="heading">Welcome to Light Vehicle Car theory Test</h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>



		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				
				<div class="row">
					<form id="quizSelectForm">

					<div class="col-md-4 col-md-offset-2" >
						<select id="select_type_quiz" name="select_type_quiz" class="form-control input" required>
							<option value=""  disabled="" selected="">Select Type of Quiz </option>
							<option value="1">Light Vehicle- Car Theory test</option>
							<option value="2">Heavy Vehicle Theory Test</option>
							<option value="3">Motor Cycle Theory Test</option>
						</select>
						
						
						
					</div>

					<div class="col-md-3">
						
						<input type="text" id="quiz_username" name="name" placeholder="Enter your name:*" value="" class="form-control input" required="">
						
					</div>
					<div class="col-md-2">
						
						<button id="quizSelectBtn" class="btn color" type="submit" > Start</button>
						
					</div>
					<br><br>
				</form>
				
				</div>


					<div class="quizContainer text-center">
						<div class="quizContainer_info text-left">
							<p id="txtQuizType">Quiz Type: Vehicle Car theory Test</p>
							</p>
							<p id="txtName">Name: Hishmat</p>
							
						</div>
					<br><br>
			         <hr>
					
			        <div class="question"></div>
			        <ul class="choiceList"></ul>
			        <div class="quizMessage"></div>
			        <div class="result"></div>
			        <div class="btn color nextButton">Next Question</div>
			        <br>
			   		
			    </div>

				
			</div>
			
		</div>

		
		</div>
	</div>



<!-- Testimonial Area
============================================ -->
<div id="testimonial-area" class="testimonial-area overlay overlay-white overlay-80 text-center pt-90 pb-90">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-xs-12">
					<img src="img/faq.png" alt="" />
					
			</div>
		</div>
	</div>
</div>


<!-- CTA Area
============================================ -->
<div class="cta-area pb-40 pt-40">
	<div class="container">
		<div class="row">
			<div class="call-to-action text-left col-md-10 col-md-offset-1 col-xs-12">
				<h3>try to get our amazing free lesson</h3>
				<a href="#" class="btn transparent ">get  lesson</a>
			</div>
		</div>
	</div>
</div>


@endsection

@section('scripts')

<script type="text/javascript">
	
	/**
 * Created with JetBrains WebStorm.
 * User: pwanwu
 * Date: 18/09/2013
 * Time: 17:41
 * To change this template use File | Settings | File Templates.
 */
 // var questions;

var questions;

// var questions=0;
var currentQuestion = 0;
var correctAnswers = 0;
var quizOver = false;

$(document).ready(function () {
	 


	$('#quizSelectForm').submit(function(e){
		e.preventDefault();
		selectedQuizValue = $("#select_type_quiz option:selected").val();
		selectedQuizText =$("#select_type_quiz option:selected").text();
		quizUsername= $("#quiz_username").val();

		var url='http://ci.lan/quiz_qa/1',
        data=$(this).closest('form').serialize();

    	$.ajax({
        url:url,
        type:'get',
        data:data,
        dataType: 'json',
        success:function(response){
           //whatever you wanna do after the form is successfully submitted
           $(".quizContainer").show();
            questions=response;
            console.log(questions);
            $('#txtQuizType').text('Quiz type:  '+selectedQuizText);
            $('#txtName').text('Name:  '+quizUsername);

   			displayCurrentQuestion(questions,currentQuestion,correctAnswers);
    		$(this).find(".quizMessage").hide();


           },
        async: false
        });
   


		



	});

    

    // On clicking next, display the next question
    $(this).find(".nextButton").on("click", function () {
        if (!quizOver) {

            value = $("input[type='radio']:checked").val();

            if (value == undefined) {
                $(document).find(".quizMessage").text("Please select an answer");
                $(document).find(".quizMessage").show();
            } else {
                // TODO: Remove any message -> not sure if this is efficient to call this each time....
                $(document).find(".quizMessage").hide();

                if (value == questions[currentQuestion].correctAnswer) {
                    correctAnswers++;
                }

                currentQuestion++; // Since we have already displayed the first question on DOM ready
                if (currentQuestion < questions.length) {
                    displayCurrentQuestion(questions,currentQuestion,correctAnswers);
                } else {
                    displayScore();
                    //                    $(document).find(".nextButton").toggle();
                    //                    $(document).find(".playAgainButton").toggle();
                    // Change the text in the next button to ask if user wants to play again
                    $(document).find(".nextButton").text("Play Again?");
                    quizOver = true;
                }
            }
        } else { // quiz is over and clicked the next button (which now displays 'Play Again?'
            quizOver = false;
            $(document).find(".nextButton").text("Next Question");
            resetQuiz();
            displayCurrentQuestion(questions,currentQuestion,correctAnswers);
            hideScore();
        }
    });

});

// This displays the current question AND the choices
function displayCurrentQuestion(questions,currentQuestion,correctAnswers) {

    console.log("In display current Question");

    var question = questions[currentQuestion].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices = questions[currentQuestion].choices.length;

    // Set the questionClass text to the current question
    $(questionClass).text(question);

    // Remove all current <li> elements (if any)
    $(choiceList).find("li").remove();

    var choice;
    for (i = 0; i < numChoices; i++) {
        choice = questions[currentQuestion].choices[i];
        $('<li><input type="radio" value=' + i + ' name="dynradio" />' + choice + '</li>').appendTo(choiceList);
    }
}

function resetQuiz() {
    currentQuestion = 0;
    correctAnswers = 0;
    hideScore();
}

function displayScore() {
    $(document).find(".quizContainer > .result").text("You scored: " + correctAnswers + " out of: " + questions.length);
    $(document).find(".quizContainer > .result").show();
}

function hideScore() {
    $(document).find(".result").hide();
}





</script>


@endsection
