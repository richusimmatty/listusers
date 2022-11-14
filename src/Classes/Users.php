<?php 

namespace UserCrawler\Classes;

class Users{

    private $url_to_crawl="",$response="";

    function __construct($url){
    
           
          
                $this->$url_to_crawl = $url;
                $this->$response = @file_get_contents($url);
                if(!$this->$response){
                    echo "Error occured.";
                    return;
                  }


                $this->$response = json_decode($this->$response);
            
              
          



    }

    function getUsers(){
    
        $res = $this->$response;
        return $res->data;
   
    }

    function getUser($id){
      $getUser = @file_get_contents("https://reqres.in/api/users/{$id}");

      if(!$getUser){
        echo "Error occured.";
        return;
      }
      $res = json_decode($getUser);

      return $res;


      

    }

    function getTotalPages(){
        return $this->$response->total_pages;
    }

}