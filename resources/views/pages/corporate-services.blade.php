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
    background-color: lightgoldenrodyellow;
    border-radius: 6px;
    width: 75%;
    margin: auto;
    padding-top: 5px;
    -moz-box-shadow: 10px 10px 5px #888;
    -webkit-box-shadow: 10px 10px 5px #888;
    box-shadow: 10px 10px 5px #888;
    position: relative;
}
.nextButton {
    box-shadow: 3px 3px 5px #888;
    border-radius: 6px;
    width: 150px;
    height: 40px;
    text-align: center;
    background-color: lightgrey;
    /*clear: both;*/
    color: red;
    font-family:'Rokkitt', serif;
    position: relative;
    margin: auto;
    padding-top: 20px;
}
.question {
    font-family:'Rokkitt', serif;
    font-size: 2em;
    width: 90%;
    height: auto;
    margin: auto;
    border-radius: 6px;
    background-color: lightgrey;
    text-align: center;
}
.quizMessage {
    background-color: peachpuff;
    border-radius: 6px;
    width: 30%;
    margin: auto;
    text-align: center;
    padding: 2px;
    font-family:'Rokkitt', serif;
    color: red;
}
.choiceList {
    font-family: Courier, serif;
    color: blueviolet;
}
.result {
    width: 30%;
    height: auto;
    border-radius: 6px;
    background-color: linen;
    margin: auto;
    text-align: center;
    font-family:'Rokkitt', serif;
}
/* End of Quiz Classes */
</style>
<!-- Page Banner Area
============================================ -->
<div class="page-banner-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>Corporate Services</h1>
				<ul>
					<li><a href="#">home</a></li>
					<li><span> Our Clients</span></li>
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
				<h3 class="heading">Corporate Services</h3>
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
				<h3 class="heading">Our Corporate Services</h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>

		<div class="row">
			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">Learner Driving Courses</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>



			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">Drivers Risk Assessment</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>


			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">Road Safety Solutions</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>

			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">Advanced & Defensive Driving Courses</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">Hazardous Material Handling Safety Training</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>
			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">Occupational Health and Safety Courses</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>
			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">First Aid Training Programs</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>
			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">Vocational Training Solutions</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">Management Skills Development Courses</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>
			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">Management Consultancy</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>
			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">Management System</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>
			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">Food Safety Training</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">HACCAP</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>


			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">In-Vehicle Monitoring Solution</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>
			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">All other Typing & Information Services</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>

			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">ISO 14001 Environmental Management System</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="blog-item col-md-3 col-sm-6 col-xs-12">
				<a href="blog-details.html" class="image">
					<img src="img/blog/7.jpg" alt="">
					<i class="icofont icofont-link-alt"></i>
				</a>
				
				<h5 class="title"><a href="blog-details.html">ISO 27000 Information Security Management System</a></h5>
				<div class="description">
					<p>Eu ferri brute mentitum vel. Pro oporteat persequ menandri deterruisset ei mei. An omnium fuisset pro An orfez way to oporteat...</p>
				</div>
			</div>


			</div>
			<div class="faq-image col-md-12">
				
			</div>
		</div>
	</div>



<!-- About Area
============================================ -->
<div id="feature-area" class="feature-area bg-white pt-90 pb-90">
	<div class="container">
		<!-- Section Title -->

		<div class="quizContainer">
         <h1>Hello! Welcome to the JS Dynamic Quiz!</h1>

        <div class="question"></div>
        <ul class="choiceList"></ul>
        <div class="quizMessage"></div>
        <div class="result"></div>
        <div class="nextButton">Next Question</div>
        <br>
    </div>




		<div class="row">
			<div class="section-title text-center col-xs-12 mb-45">
				<h3 class="heading">Drive Cool This Summer at CDI</h3>
				<div class="excerpt">
					<p>Civil Driving Institute, a successful driving institute in Dubai, Ajman has launched a Summer Promotion. The offer allows students to avail up to 10 free classes at the time of registration. According to their convenience, students can choose any of CDI’s branches</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>

			<p style="font-size: 18px;line-height: 33px;">
				How safe are your family and you when you are driving? A seasoned and safe driver takes responsibility not only for one’s own safety but also for that of others around them. And this is exactly what CDI’s DEFENSIVE DRIVING COURSE helps you achieve. 
It makes you a responsible and safe driver.
Taking this course will
Challenge you to think differently about road users, their behavior and understand their underlying driving psychology
Boost up your confidence and give a positive attitude
Lower vehicle running costs and costs repercussions of an accident
And Finally
Help you actively plan ahead while driving thereby avoiding danger and reducing accident probability
Civil Driving Institute’s Defensive Driving Course is specifically designed and tested to meet the demanding conditions of UAE as well as GCC.
The course focuses heavily on enhancing the degree of awareness of the attendee. The statistics of accidents are shown and their cause explained , thereby removing the ‘accidents happen to others’ mentality that most drivers have. The course content covers important elements such as observation, traffic hazard recognition, system of car control, safe following distance, circle of safety and many other driving techniques such as positioning the vehicle to advantage, correct driving line and use of speed. 
The Defensive Driving Course has been developed by qualified technical team and those experts in the field of driver and instructor training; they utilises their many years of experience in the driving sector along with their psychological expertise to create unique & relevant training programs.
The course comprises a comprehensive and highly interactive presentation, a detailed briefing on crucial vehicle checks and a thorough in-car practical session where the delegates drive on busy UAE roads alongside our trainers followed by proper review and feedback. 
Download Defensive Driving Course Flyer
Following Defensive Driver Training Courses are offered by CDI - 
Light Motor Vehicle / Car Defensive
Heavy Bus Defensive
Light Bus Defensive
Heavy Truck Defensive
Motor Cycle Defensive
Forklift Safety Operating
Course Benefits & USPs
How is the course beneficial?
The Defensive driving Course conforms to international driver risk management and reduction practices and will create safer drivers; drivers who actively think about their behaviour and that of other road users. This process brings benefits to drivers, their families and employers alike.
The families will worry less about their relative’s safe return after driving and they will also feel safer when being driven in the family vehicle.
For employers, number of accidents will be reduced for CDI-trained drivers; the various costs for staff replacement and retraining will be reduced, vehicle repair needs and costs will come down and vehicle fleet insurance premiums will be contained. Unique Points of CDI’s Advanced Driving Course
Whole course is at best western standards, fully approved and accredited by international learned organizations. The only product using proven & leading-edge methodology anywhere eastwards from Europe to Australia.
Benchmarked against acknowledged best practices advocated by international organizations .
Unique to this region (GCC) – this course is specifically designed for this region and the drivers therein, it is not a European course rebadged. Made in the UAE for use in the GCC!!
We create a Positive Psychological Attitude! EQ, not IQ
We show how to recognize and minimize in-vehicle risks.
We coach delegates in techniques of Active Planning and Hazard Management.
Choice of half-day or full-day courses
Each delegate session unique and tailor-made to your driving skills
Active on-road assessment of your skills behind the wheels followed by a customized development programme for you
Balance of fully interactive theory session and extensive on-road driving
Modern, comfortable, high-end fully air-conditioned vehicles
Internationally accredited advanced driving trainers
Learn about vehicle safety checks
CDI encourages you to THINK RIGHT for greater safety of everyone on the road.
So, gear yourself up to become an advanced and safe driver! 
			</p>
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

var questions = [{
    question: "What is the population of Brazil?",
    choices: ["145 million", "199 million", "182 million", "205 million"],
    correctAnswer: 1
}, {
    question: "What is 27*14?",
    choices: ["485", "634", "408", "528"],
    correctAnswer: 2
}, {
    question: "What is the busiest train station in the world?",
    choices: ["Grand Central, NY", "Shibuya, Tokyo", "Beijing Central, Chine", "Gard du Nord, Paris"],
    correctAnswer: 1
}, {
    question: "What is the longest river?",
    choices: ["Nile", "Amazon", "Mississippi", "Yangtze"],
    correctAnswer: 0
}, {
    question: "What is the busiest tube station in the London?",
    choices: ["Waterloo", "Baker Street", "Kings Cross", "Victoria"],
    correctAnswer: 0
}];

var currentQuestion = 0;
var correctAnswers = 0;
var quizOver = false;

$(document).ready(function () {

    // Display the first question
    displayCurrentQuestion();
    $(this).find(".quizMessage").hide();

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
                    displayCurrentQuestion();
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
            displayCurrentQuestion();
            hideScore();
        }
    });

});

// This displays the current question AND the choices
function displayCurrentQuestion() {

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
