<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class ControllerBloges extends Controller
{


    // private static  function getData(){
    //     return [
    //         [
    //             'id' => 1,
    //             'slug' => 'Elmehdi',
    //             'title' => 'how to create a blog with Laravel',
    //             'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusapossimus pariatur unde',
    //             'image_path' => '03.avif'
    //         ],
    //         [
    //             'id' => 2,
    //             'slug' => 'Jason Statham',
    //             'title' => 'how to lorne faite',
    //             'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusapossimus pariatur unde',
    //             'image_path' => '04.avif'
    //         ],
    //     ];
    //     } // self::getData()


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('blogg.index',[
            'blogesData'=>Blogs::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('blogg.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blogStor =  new Blogs();
         
        $request->validate([
            'slug'=>'required',
            'title'=>'required',
            'decription'=>'required',
            'image_path'=>'required|mimes:png,jpg,jpeg,avif',
        ]);

        if($request->has('image_path')){
            $img = $request->file('image_path');
            $extend = $img->getClientOriginalExtension();
            $filename = time().'.'.$extend;
            $img->move('uplod',$filename);
        }

        $blogStor->slug = strip_tags($request->input('slug'));
        $blogStor->title = strip_tags($request->input('title'));
        $blogStor->decription = strip_tags($request->input('decription'));
        $blogStor->image_path = $filename;

        $blogStor->save();
        
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $readMore = Blogs::findOrFail($id);

       return view("blogg.show",[
        'ReadMore' => $readMore
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $readMore = Blogs::findOrFail($id);
        // dd($readMore);
        return view('blogg.edit',[
            'updatData'=> $readMore
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'slug'=>'required',
            'title'=>'required',
            'decription'=>'required',
            'image_path'=>'required|mimes:png,jpg,jpeg,avif',
        ]);
        

        if($request->has('image_path')){
            $img = $request->file('image_path');
            $extend = $img->getClientOriginalExtension();
            $filename = time().'.'.$extend;
            $img->move('uplod',$filename);
        }

         $update = Blogs::findOrFail($id);

         $update->slug = strip_tags($request->input('slug'));
         $update->title = strip_tags($request->input('title'));
         $update->decription = strip_tags($request->input('decription'));
         $update->image_path = $filename;

         $update->save();


        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $to_delet = Blogs::findOrFail($id);
        $to_delet->delete();
        
        return Redirect()->route('blogs.index');
    }
}
