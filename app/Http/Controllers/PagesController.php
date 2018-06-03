<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    
    public function home(){

    	$data['active']          = "home";
    	return view('pages.home', compact('data'));
    }


    public function companyProfile(){
    	$data['active']          = "about";
    	return view('pages.company-profile', compact('data'));
    }


    public function missionVision(){
		$data['active']          = "about";
    	return view('pages.mission-vision', compact('data'));
    }

    public function accreditation(){
    	$data['active']			="about";
    	return view('pages.accreditation', compact('data'));
    }

    public function clients(){
    	$data['active']			="about";
    	return view('pages.clients', compact('data'));
    }

    public function corporateServices(){
    	$data['active']			="corporate-services";
    	return view('pages.corporate-services', compact('data'));
    }

    public function contact(){
    	$data['active']			="contact";
    	return view('pages.contact', compact('data'));
    }








    public function theoryTest(){
        $data['active']         = "theory-test";
        return view('pages.theory-test', compact('data'));

    }










    public function carDriving(){
        $data['active']         ="driving-courses";
        return view('pages.driving.car', compact('data'));
    }

    public function goldenDriving(){
        $data['active']         ="driving-courses";
        return view('pages.driving.golden', compact('data'));
    }

    public function motorcycleDriving(){
        $data['active']         ="driving-courses";
        return view('pages.driving.motorcycle', compact('data'));
    }

    public function platinumDriving(){
        $data['active']         ="driving-courses";
        return view('pages.driving.platinum', compact('data'));
        
    }

     public function heavytruckDriving(){
        $data['active']         ="driving-courses";
        return view('pages.driving.heavytruck', compact('data'));
        
    }
     public function heavybusDriving(){
        $data['active']         ="driving-courses";
        return view('pages.driving.heavybus', compact('data'));
        
    }


    public function lightbusDriving(){
        $data['active']         ="driving-courses";
        return view('pages.driving.lightbus', compact('data'));
        
    }

    public function forkliftDriving(){
        $data['active']         ="driving-courses";
        return view('pages.driving.forklift', compact('data'));
        
    }

    public function heavyForkliftDriving(){
        $data['active']         ="driving-courses";
        return view('pages.driving.heavy-forklift', compact('data'));
        
    }

    public function determinationDriving(){
        $data['active']         ="driving-courses";
        return view('pages.driving.determination', compact('data'));
        
    }

    public function refresherDriving(){
        $data['active']         ="driving-courses";
        return view('pages.driving.refresher', compact('data'));
        
    }

    public function gccDriving(){
        $data['active']         ="driving-courses";
        return view('pages.driving.gcc', compact('data'));
        
    }










    public function vocationalTraining(){
        $data['active']         ="training-development";
        return view('pages.training.vocational', compact('data'));
        
    }

    public function industrialTraining(){
        $data['active']         ="training-development";
        return view('pages.training.industrial', compact('data'));
        
    }
    public function engineeringMechanicalTraining(){
        $data['active']         ="training-development";
        return view('pages.training.engineering-mechanical', compact('data'));
        
    }

     public function skillPrograms(){
        $data['active']         ="training-development";
        return view('pages.training.skill-program', compact('data'));
        
    }

    public function laAdvanceProgram(){
        $data['active']         ="training-development";
        return view('pages.training.la-advance-program', compact('data'));
        
    }
    public function healthSafetyTraining(){
        $data['active']         ="training-development";
        return view('pages.training.health-safety', compact('data'));
        
    }
    public function safetySecuritySolutions(){
        $data['active']         ="training-development";
        return view('pages.training.safety-security', compact('data'));
        
    }

     public function fireSafetySolutions(){
        $data['active']         ="training-development";
        return view('pages.training.fire-safety', compact('data'));
        
    }

    public function inVehicleSolution(){
        $data['active']         ="training-development";
        return view('pages.training.in-vehicle', compact('data'));
        
    }










    public function qualitySystem(){
        $data['active']         ="management-system";
        return view('pages.management-system.quality-system', compact('data'));
        
    }


    public function environmentalSystem(){
        $data['active']         ="management-system";
        return view('pages.management-system.environmental-system', compact('data'));
        
    }

     public function occupationalHealthSystem(){
        $data['active']         ="management-system";
        return view('pages.management-system.occupational-health-system', compact('data'));
        
    }

     public function foodSafetySystem(){
        $data['active']         ="management-system";
        return view('pages.management-system.food-safety-system', compact('data'));
        
    }

     public function informationSecuritySystem(){
        $data['active']         ="management-system";
        return view('pages.management-system.information-security-system', compact('data'));
        
    }


    





    

    




    
    


    

    


    

    

    

    

    


    
}



