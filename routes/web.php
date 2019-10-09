<?php
use App\Tag;
use App\Post;
use App\User;
use App\Photo;
use App\Country;
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

// Route::get('/user/{id}/role', function($id){
//     $user = User::find($id)->roles()->orderBy('id', 'desc')->get();

//     return $user;

//     // foreach ($user->roles as $role) {
//     //     echo $role;
//     // }
// });

//Accessing the intermediate table / pivot

// Route::get('user/pivot', function(){
//     $user = User::find(3);

//     foreach ($user->roles as $role ) {
//         echo $role->pivot->created_at;
//     }
// });


// Route::get('/user/country', function(){
//     $country = Country::find(2);

//     foreach ($country->posts as $post ) {
//         echo $post->title ;
//     }
// });

//Polymorphic relationships

// Route::get('/user/photos', function(){
//     $user = User::find(1);
//     foreach ($user->photos as $photo) {
//         return $photo->path;
//     }
// });


// Route::get('/post/{id}/photos', function($id){
//     $post = Post::find($id);
//     foreach ($post->photos as $photo) {
//         echo $photo->path . "</br>";
//     }
// });

// Route::get('photo/{id}/post', function($id){
//     $photo = Photo::findOrFail($id);
//     return $photo->imageable;

// });

//Polymorphic Many to Many

// Route::get('/post/tag', function(){
//     $post = Post::find(1);
//     foreach ($post->tags as $tag) {
//         echo $tag->name;
//     }
// });

Route::get('/tag/post', function(){
    $tag = Tag::find(2);
    foreach ($tag->posts as $post) {
        echo $post;
    }
});

Route::get('/tag/user', function(){
    $tag = Tag::find(1);
    foreach ($tag->users as $user) {
        echo $user;
    }
});
