<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;

use App\Book;

class BookRepository{
    
    protected $book;
    public function __construct(Book $book) {
        $this->book=$book;
    }
    
    public function find($id){
        return $this->book->find($id);
    }
    
    public function findAll(){
        return $this->book->all();
    }
    
    public function save($data){
         $this->book->name = $data->name;
         $this->book->price=$data->price;
         $this->book->save();
    }
    public function update($id,$data){
         $book = $this->find($id);
         $book->name = $data->name;
         $book->price=$data->price;
         $book->save();
    }
    
    public function delete($id){
        $book = $this->find($id);
        $book->delete();
    }
}