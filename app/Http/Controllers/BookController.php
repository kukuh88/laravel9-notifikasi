<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
    	$book = Book::all();
    	return view('book.index',compact(['book']));
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'nik' => 'required|max:255|unique:book',
            'name' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'golongan' => 'required|max:255',
            'tmt_golongan' => 'required|max:255',
            'eselon' => 'required|max:255',
            'tmt_eselon' => 'required|max:255'
        ]);

    	$book = Book::create($validatedData);    	
    	return redirect('/book')->with('success','Data has been saved successfully!');
    }

    public function edit($id){
    	$book = Book::find($id);
    	return view('book.edit',compact(['book']));
    }

    public function update(Request $request,$id){
    	$book = Book::find($id);
    	$book->update($request->all());
    	toastr()->success('Data has been updated successfully!');
    	return redirect('/book')->with('success','Data has been updated successfully!');
    }

    public function delete($id){
    	$book = Book::find($id);
    	$book->delete();
    	return redirect('/book')->with('success','Data has been deleted successfully!');
    }

}
