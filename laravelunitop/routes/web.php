<?php

use App\Models\Post;
use App\Models\Role;
use App\Models\FeaturedImages;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

//định tuyến cơ bản

// Route::get('/post', function(){
//     return "Đây là trang bài viết";
// });

// // Đường dẫn dành cho admin
// Route::get('/admin/product', function(){
//     return "Trang quản lí sản phẩm";
// });

// // Đường dẫn vào trang admin thêm sản phẩm
// Route::get('/admin/product/add', function(){
//     return "Trang thêm sản phẩm";
// });


// // định tuyến có tham số
// Route::get('/posts/{id}', function($id){
//     return $id;
// });

// Route::get('posts/{cat_id}/page/{page}', function($cat_id, $page){
//     return $cat_id.'-'.$page;
// });

// //Đặt tên định tuyến
// Route::get('users/profile', function(){
//     return route('profile');
// }) -> name('profile');

// // Định tuyến có tham số tùy chọn
// // tham số có thể có hoặc k
//     //domin.com/user => Hiển thị ra danh sách users
//     //domin.com/user/4 => Hiển thị ra thông tin của người dùng có id=4
// Route::get('users/{id?}', function($id = 0){ 
//     // thêm dấu ? là có hoặc 0 và phải gán cho nó 1 giá trị mặc định để khi kh khai báo thì nó sẽ mặc định là = 0
//     return $id;
// });


// Route::get('produc/{id}', function($id){
//     return $id;
// }) -> where('id', '[0-9]+');

// // Route::get('produc/{slug}/{id}', function($slug, $id){
// //     return $id.'---'.$slug;
// // }) -> wwhere(['id'=>'[0-9]+', 'slug'=> '[A-Za-z0-9-_]+']);

// // định tuyến đến 1 view
// Route::view('/welcome', 'welcome'); // xem ở mục folder <resources>

// // định tuyến qua controller
 use App\Http\Controllers\PostController;
 use App\Http\Controllers\RoleController;
 use App\Http\Controllers\FeaturedImagesController;
// Route::get('/post/{id}', [PostController::class, 'detail']);

// Quản lí bài viết trong admin

// Route::get('product/show/{id}', [ProductController::class, 'show']);
// Route::get('product/create', [ProductController::class, 'create']);
// Route::get('product/update/{id}', [ProductController::class, 'update']);

// //use App\Http\Controllers\PostController;
// use App\Http\Controllers\AdminPostController;
// Route::get('admin/post/show', [AdminPostController::class, 'show'] );
// Route::get('child', function(){
//     return view('child',[ 'data'=>"Phan Van Cuong"]);
// });

// Route::get('users/insert', function(){
//     DB::table('users')->insert(
//         ['name' => 'To Minh Duc', 'email' => 'ducto@gmail.com', 'password' => bcrypt('admin') ] // hàm bảo mật hơn
//     );
// });

// Route::get('post/add', [PostController::class,'add']);
// Route::get('post/show', [PostController::class, 'show']);
// Route::get('posts/read', function(){
//     $posts = Post::all();
//     // Vì Model Post mặc định sẽ kết nối với bảng posts trong database.
//     // Mà trong bảng chỉ có bảng post nên mở app/Models/Post.php và thêm dòng:
//     //  protected $table = 'post';
//     return $posts;
// });

//Route::get('posts/read', [PostController::class, 'read']);
// Route::get('images/read', [FeaturedImagesController::class, 'read']);
// Route::get('role/show', [RoleController::class, 'show']);

Route::get('post/add', [PostController::class, 'add']);

Route::get('user/reg', function(){
    return view('user/reg');
});