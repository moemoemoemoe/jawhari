<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Article;
use Validator;
use Redirect;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_articles()
    {
         $articles = Article::orderBy('id','DESC')->get();
         $categories = Categorie::orderBy('id','Desc')->get();
        return view('articles.manage_articles',compact('categories','articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_articles_save(Request $r)
    {
         $foreign_name = mt_rand(11111,99999);
        $title = $r->input('title');
      $content = $r->input('content');
      $category = $r->input('cat_id');
      $photo = $r->file('photo');

        $data = ['title' => $title,'content'=> $content, 'cat_id' => $category,'photo' => $photo];

      $rules = ['title' => 'required' ,'content' => 'required','cat_id' => 'required','photo'=> 'required'];

      $v = Validator::make($data, $rules);

      if($v->fails()){
        return Redirect::Back()->withErrors($v);
      }else
      {

            $destination = 'uploads/articles';
            $photo_name = $foreign_name;
            $photo_name .= '.'.$photo->getClientOriginalExtension();
            $photo->move($destination, $photo_name);

     $article = new Article();
     $article->title = $title;
     $article->content = $content;
     $article->cat_id = $category;
      $article->image_url_original = $photo_name;   
    $article->save();
        return Redirect::back()->with('success', 'New Article successfuly created');

      }

        
    }
    public function delete_article($id)
    {
    
      $article = Article::findOrFail($id);
      $article->delete();
        return Redirect::back()->with('success' , 'Category was Deleted successfuly!!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
