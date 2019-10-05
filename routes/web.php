<?php

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
// Route::get('/insert', function(){
//     DB::insert('INSERT INTO posts(title, content) VALUES (?, ?)', ['PHP', 'laravel is good framework and awesome']);

// });
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

Route::get('/delete', function(){
    $deleted = DB::delete('DELETE FROM posts WHERE id = ?', [2]);
    return $deleted;
});
