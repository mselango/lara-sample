<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Book;
use App\Repositories\BookRepository;
use App\Http\Requests\StoreBookPost;

class BookController extends Controller {

    protected $book;

    public function __construct(BookRepository $book) {
        $this->book = $book;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $books = $this->book->paginate(5);
        return view('books.index', ['books' => $books]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreBookPost $request) {
       
        $path='';
        if ($request->photo) {
             $path =$request->photo->store('books');
        }
        $this->book->save($request,$path);       
        $request->session()->flash('success', 'book added successfully !');
        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $books = $this->book->find($id);
        return view('books.show', ['book' => $books]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $book = $this->book->find($id);
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $book = $this->book->update($id, $request);
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id) {
        $book = $this->book->delete($id);
        $request->session()->flash('success', 'book deleted successfully !');
        return redirect('books');
    }

}
