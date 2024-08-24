<?php
class Book {
 
     private $title;
 private $availableCopies;

 public function __construct($title, $availableCopies) {
     
     $this->title = $title;
     $this->availableCopies = $availableCopies;
     }

 public function getTitle() {
    return $this->title;
    }
  
 // TODO: Add getAvailableCopies method
 public function getAvailableCopies() {
    return $this->availableCopies;
    }
  

 // TODO: Add borrowBook method
 public function borrowBook() {
    if ($this-> availableCopies > 0) {
        $this->availableCopies--;
                // echo "Book '{$this->title}' borrowed successfully. AvailableCopies: {$this-> availableCopies}\n";
            } else {
                echo "Sorry, '{$this-> title}' is not available right now.\n"; 
            }
    }


 // TODO: Add returnBook method
 public function returnBook() {
    $this-> availableCopies++;
        // echo "Book '{$this-> title}' returned successfully. Available copies: {$this-> availableCopies}\n";
    
    }
}

 // TODO: Add properties as Private
 class Member {
    Private $name;


 // TODO: Add getName method
 public function __construct($name) {
    $this->name = $name;
 }
    // TODO: Initialize properties
    public function getName() {
    return $this->name;
 }
   
 // TODO: Add borrowBook method
 public function borrowBook(Book $book){
    // echo "{$this->name} is trying to borrow '{$book->getTitle()}'...\n";
    $book->borrowBook();
    }

    public function returnBook(Book $book){
        // echo "{$this->name} is returning '{$book->getTitle()}'...\n";
        $book->returnBook();
    }
 }
  

 // TODO: Add returnBook method
        $book1 = new Book("The Great Gatsby", 5);
        $book2 = new Book("To kill a Mockingbird", 3);
        $member1 = new Member("John Doe");
        $member2 = new Member("Jan Smith");
        $member1->borrowBook($book1);
        $member2->borrowBook($book2);


        // echo "......................\n"; 
        //echo "Available Copies:\n";
        echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}<br>";

        echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}";
        