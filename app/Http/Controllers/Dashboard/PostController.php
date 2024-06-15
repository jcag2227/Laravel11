<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //echo 'Hemos accedido al método index del controlador';


    /**************************** Ejemplo para crear un registro ********************************/
        /*$post = Post::create(
            [
                'title' => 'Post tercero',   
                'slug' => 'test Slug', 
                'description' => 'test Description',  
                'content' => 'test Content',  
                'image' => 'test Image',
                'category_id' => 1 
            ]);  */

    /**************************** Ejemplo para modificar un registro ********************************/
        /*$post = Post::find(2);

        $post->update(['slug' => 'Slug del segundo post']);        */


    /**************************** Ejemplo para eliminar un registro ********************************/
        /*$post = Post::find(3);

        $post->delete();     */

        //$post = Post::find(2)->delete();

    /******************************* Visualización de Registros *************************************/
        //dd($post);               //sirve para ver en este caso el objeto "$post"
        //dd($post->title); 

    /**************************** Ejemplo retornos con JSON ********************************/
        /*return response()->json([
            'name' => 'Andres Cruz',
            'state' => 'CA'
        ]);*/

    /**************************** Ejemplo de relaciones en las tablas Post y Category ********************************/   
       /* $post = Post::find(2);         
        echo 'Título de la categoria: ' . $post->category->title . '<br>' . 'Slug de la categoria: ' . $post->category->slug;*/

        $category = Category::find(1);

        //dd($category->posts);
        //dd($category->posts[0]);
        dd($category->posts[0]->title);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
