<?php

class WeatherController extends Controller{

	public function index(){

        $this->set(result, false);

	}

	public function getResults(){

        //$xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=83fb33c4e8e340078f601008171311&q=46260&format=xml&num_of_days=2");
        $xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=83fb33c4e8e340078f601008171311&q=".$_POST['zip']."&format=xml&num_of_days=2");

        $this->set(result, true);
        $this->set(weather, $xml);
    }
	
	
}
