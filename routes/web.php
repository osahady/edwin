<?php
use App\Post;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/
Route::get('/insert', function(){
    DB::insert('INSERT INTO posts(title, content, user_id) VALUES (?, ?, ?)', ['laravel', 'laravel is good framework', 1]);

});
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/
// Route::get('/read', function(){
//     $results = DB::select('SELECT * FROM posts WHERE id = ?', [1]);
//     return $results;
//     // foreach ($results as $post ) {
//     //     return $post->title ;
//     // }
// });

// Route::get('/update', function(){
//     $updated = DB::update('UPDATE posts SET title="updated title" WHERE id = 1');
// });

// Route::get('/delete', function(){
//     $deleted = DB::delete('DELETE FROM posts WHERE id = ?', [2]);
//     return $deleted;
// });

/*
|--------------------------------------------------------------------------
ELoquent
|--------------------------------------------------------------------------

*/
// Route::get('/find', function(){
//     $posts = Post::all();

//    foreach ($posts as $post ) {
//        return $post->title;
//    }
// });


// Route::get('/findwhere', function(){
//     $posts = Post::where('id','>=' , 3)->orderBy('id', 'desc')->take(2)->get();
//     return $posts;
// } );

// Route::get('/findmore', function(){
//     // $posts = Post::findOrFail(2);
//     // return $posts;

//     // $posts = Post::where('users_count', '<', 50)->firstOrFail();

// });

// Route::get('/basicinsert', function(){
//     $post = new Post;
//     $post->title = 'New title';
//     $post->content = 'New content';

//     $post->save();
// });

Route::get('/create', function(){
    Post::create(['title' => 'title three', 'content'=>'Wow I am learning with Edwin']);
});

// Route::get('/update', function(){
//     Post::where('id', 3)->where('is_admin', 0)->update(['title'=>'New PHP', 'content'=>'content2']);
// });

// Route::get('/delete', function(){
//     $post = Post::find(1);
//     $post->delete();
// });

// Route::get('/delete2', function(){
//     Post::destroy([4,5]);

//     // Post::where('is_admin', 0)->delete();
// });

Route::get('/softdeletes', function(){
    Post::find(10)->delete();
});

// Route::get('/readsoftdeletes', function(){
//     // $post = Post::find(11);
//     // return $post;

//     // $post = Post::withTrashed()->where('id', 10)->get();
//     // return $post;

//     $post = Post::onlyTrashed()->get();
//     return $post;
// });

// Route::get('/restore', function(){
//     Post::withTrashed()->where('is_admin', 0)->restore();
// });

// Route::get('/forcedelete', function(){
//     Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });

/*
|--------------------------------------------------------------------------
ELoquent Relationships
|--------------------------------------------------------------------------
|
*/
//One to One relationship
// Route::get('/user/{id}', function($id){

//     return User::find($id)->post;
// })->name('aaa');

// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user;
// });

// Route::get('/posts', function(){
//     $user = User::find(1);

//     $posts =[];
//     foreach ($user->posts as $post) {
//         array_push($posts, $post);
//     }
//     return $posts;
// });

// Route::get('/posts', function(){
//     $user = User::find(1);


//     foreach ($user->posts as $post) {
//        echo $post->title. '<br/>';
//     }

// });

Route::get('/user/{id}/role', function($id){
    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();

    return $user;

    // foreach ($user->roles as $role) {
    //     echo $role;
    // }
});
