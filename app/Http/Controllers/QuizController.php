<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class QuizController extends Controller
{


    public function getQuizQS($quizTypeId){
//     	var questions = [{
//     question: "What is the population of Brazil?",
//     choices: ["145 million", "199 million", "182 million", "205 million"],
//     correctAnswer: 1
// }, {
//     question: "What is 27*14?",
//     choices: ["485", "634", "408", "528"],
//     correctAnswer: 2
// }, {
//     question: "What is the busiest train station in the world?",
//     choices: ["Grand Central, NY", "Shibuya, Tokyo", "Beijing Central, Chine", "Gard du Nord, Paris"],
//     correctAnswer: 1
// }, {
//     question: "What is the longest river?",
//     choices: ["Nile", "Amazon", "Mississippi", "Yangtze"],
//     correctAnswer: 0
// }, {
//     question: "What is the busiest tube station in the London?",
//     choices: ["Waterloo", "Baker Street", "Kings Cross", "Victoria"],
//     correctAnswer: 0
// }];

    	$quizQuestion=array(
    		
    		array(
    			'question'	=>'New drivers have a high crash rate because they?',
    			'choices'=> 
		    		array(
		    			'have not done many hours of driving practice.',
		    			'lack confidence in their driving skills',
		    			'can be distracted by other peoples advice',
		    			

		    		),
    			'correctAnswer'=>1
    		),
    		array(
    			'question'	=>'What is the main factor that helps you to be a better driver?',
    			'choices'=> 
		    		array(
		    			'Being confident.',
		    			'Undertaking as many lessons as possible',
		    			'Tackling difficult driving situations when you are a new driver',
		    			


		    		),
    			'correctAnswer'=>1
    		),
    		array(
    			'question'	=>'One of the many techniques to safe driving is',
    			'choices'=> 
		    		array(
		    			'to try to focus on the operating the vehicle only',
		    			'to try to predict what other drivers will do next',
		    			'to try to stay ahead of the other drivers every time',
		    			


		    		),
    			'correctAnswer'=>1
    		),
    		array(
    			'question'	=>'Extra care must be taken when driving near schools because',
    			'choices'=> 
		    		array(
		    			'Young kids may cross the road without looking',
		    			'Speed limits are different in these areas',
		    			'Young kids are playing in these areas',
		    			


		    		),
    			'correctAnswer'=>2
    		),
    		array(
    			'question'	=>'If your car breaks down you should',
    			'choices'=> 
		    		array(
		    			'Warn other drivers by using hazards lights.',
		    			'Call the police station',
		    			'Leave vehicle on the road and walk away',
		    			


		    		),
    			'correctAnswer'=>2
    		),
    		array(
    			'question'	=>'A yellow traffic light means that you must',
    			'choices'=> 
		    		array(
		    			'Stop immediately.',
		    			'Stop providing it is safe to do so.',
		    			'Speed up to get through the intersection before the light turns red.',
		    			


		    		),
    			'correctAnswer'=>2
    		)



    	);
    	//print_r($quizQuestion);
    	$val= json_encode($quizQuestion);

    	echo $val;
    	exit();

    }
    
}
