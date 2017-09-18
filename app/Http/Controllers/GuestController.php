<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Article;
use App\Service;
use App\Work;
use paginate;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $services = Service::orderBy('id','Desc')->paginate(3);
        $articles =Article::orderBy('id','Desc')->get();
        $cats = Categorie::orderBy('id','Desc')->get();
        $works = Work::orderBy('id','Desc')->paginate(3);
        return view('guest.index',compact('cats','articles','services','works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single_article($id)
    {
         $cats = Categorie::orderBy('id','Desc')->get();
         $articles = Article::findOrFail($id);
        return view('guest.single_view',compact('cats','articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function categories_articles($id)
    {
         $cats = Categorie::orderBy('id','Desc')->get();
         $articles = Article::where('cat_id',$id)->get();
         return view('guest.articles_cat',compact('cats','articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
          $cats = Categorie::orderBy('id','Desc')->get();
         return view('guest.contact_us',compact('cats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
