<?php

include_once("model/Book.php");

class Model{
    public function getBookList()
    {
        //hard coded values similar to database
        retrun array(
        "Jb1"=>new Book("Jb1","R.K","A classic book"),
        "Jb2"=>new Book("Jb1","R.K","A classic book"),
        "Jb3"=>new Book("Jb1","R.K","A classic book"),
        );
    }
    
    
    public function getBook($title)
    {
        // we use the previous function to get all the books and then we return the requested one.  
        // in a real life scenario this will be done through a db select command  
        $allBooks = $this->getBookList();  
        return $allBooks[$title];  
    }  
}