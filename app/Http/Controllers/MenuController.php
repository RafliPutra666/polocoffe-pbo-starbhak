<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;    
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //get posts
          $posts = menu::latest()->paginate(5);

          //return collection of posts as a resource
          return new PostResource(true, 'List Data Posts', $posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //define validation rules
        $validator = Validator::make($request->all(), [
            'gambar_menu'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_menu'     => 'required',
            'kategori_id' => 'required',
            'harga'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $gambar_menu = $request->file('gambar_menu');
        $gambar_menu->storeAs('public/menu', $gambar_menu->hashName());

        //create post
        $menu = menu::create([
            'nama_menu' => $request->nama_menu,
            'kategori_id' => $request->kategori_id,
            'gambar_menu'     => $gambar_menu->hashName(),
            'harga'     => $request->harga,
        ]);

        //return response
        return new PostResource(true, 'Data Post Berhasil Ditambahkan!', $menu);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(menu $post)
    {
         //return single post as a resource
         return new PostResource(true, 'Data Post Ditemukan!', $post);
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
    public function update(Request $request, menu $post)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'gambar_menu'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_menu'     => 'required',
            'kategori_id' => 'required',
            'harga'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if image is not empty
        if ($request->hasFile('image')) {

            //upload image
            $gambar_menu = $request->file('gambar_menu');
            $gambar_menu->storeAs('public/menu', $gambar_menu->hashName());

            //delete old image
            // menu::delete('public/menu/'.$post->gambar_menu);

            //update post with new image
            $post->update([
            'nama_menu' => $request->nama_menu,
            'kategori_id' => $request->kategori_id,
            'gambar_menu'     => $gambar_menu->hashName(),
            'harga'     => $request->harga,
            ]);

        } else {

            $gambar_menu = $request->file('gambar_menu');
        $gambar_menu->storeAs('public/menu', $gambar_menu->hashName());

            //update post without image
            $post = menu::create([
                'nama_menu' => $request->nama_menu,
                'kategori_id' => $request->kategori_id,
                'gambar_menu'     => $gambar_menu->hashName(),
                'harga'     => $request->harga,
            ]);
        }

        //return response
        return new PostResource(true, 'Data Post Berhasil Diubah!', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu $post)
    {

        //delete post
        $post->delete();

        //return response
        return new PostResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
