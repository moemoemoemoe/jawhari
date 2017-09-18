<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use Redirect;
use Validator;
use App\Article;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_categories()
    {
         $category = Categorie::orderBy('id' , 'DESC')->get();
        return view('categories.cat_index',compact('category'));
    }
public function manage_categories_save(Request $r)
{
 $cat_name = $r->input('cat_name');
      $exist = Categorie::where('cat_name',$cat_name)->count();
      if($exist == 1)
      {
       return Redirect::Back()->withErrors('This Category Allready Exist!!');

   }

   $data = ['cat_name' => $cat_name];
   $rules = ['cat_name' => 'required'];

   $v = Validator::make($data, $rules);

   if($v->fails()){
    return Redirect::Back()->withErrors($v);
}else{

    $category = new Categorie();
    $category->cat_name = $cat_name;
    $category->save();
    return Redirect::back()->with('success', 'New category successfuly created');
}


}
 public function delete_cat($id)
    {
        $cat = Categorie::findOrFail($id);
 $cat->delete();
      $article = Article::where('cat_id',$id);
      $article->delete();
        return Redirect::back()->with('success' , 'Category was Deleted successfuly!!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
