<?php

class Pages_Controller
{

    public function home()

    {

        return view("index");
    }

    public function contact()
    {
        return view("contact");
    }

    

    public function about()
    {
        $company="Kuressaare ametikool";

        
        return view("about", ["company"=>$company]);
    }
        
}