<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
 //   return view('welcome');
//});

   // Route::get('/', function () {
   //    $name=DB::connection()->getDatabaseName();
   //    echo $name;
   // });
  use App\Entity\Member;
Route::get('member/{id}','memberController@info');

Route::get('login', 'View\memberController@toLogin');
Route::get('register', 'View\MemberController@toRegister');
Route::get('category', 'View\BookController@toCategory');
Route::get('product/category_id/{category_id}', 'View\BookController@toProduct');
Route::get('/service/cart/add/{product_id}', 'Service\CartController@addCart');
Route::get('cart', 'View\CartController@toCart');
Route::get('service/cart/delete','Service\CartController@deleteCart');

Route::get('product/category_id/product/{product_id}', 'View\BookController@toPdtContent');
Route::group(['prefix' => 'service'], function () {
    Route::any('validate_code/create','Service\ValidateController@create');
    Route::any('validate_email', 'Service\ValidateController@validateEmail');
    Route::any('register', 'Service\MemberController@register');
    Route::any('validate_phone/send','Service\ValidateController@sendSMS');
    Route::any('login','Service\MemberController@login');
    Route::any('upload/{type}','Service\UploadController@uploadFile');
    Route::get('category/parent_id/{parent_id}', 'Service\BookController@getCategoryByParentId');
});
    Route::group(['middleware' => 'check.login'], function () {
        Route::any('order_commit/{product_id}','View\OrderController@toOrderCommit');
        Route::any('order_list','View\OrderController@toOrderlist');
    });
        Route::group(['prefix' => 'admin'], function () {
            Route::post('service/login','Admin\IndexController@login');
            Route::get('Login','Admin\IndexController@toLogin');
            Route::get('index','Admin\IndexController@toIndex');
            Route::any('category','Admin\CategoryController@toCategory');
            Route::any('category_add','Admin\CategoryController@toCategoryAdd');
            Route::any('service/category/add','Admin\CategoryController@categoryAdd');
            Route::any('category_edit','Admin\CategoryController@toCategoryEdit');
            Route::any('service/category/del','Admin\CategoryController@categoryDel');
            Route::any('service/category/edit','Admin\CategoryController@categoryEdit');
            Route::get('index',function(){
                 return view('admin.index');
        });
       Route::get('order', 'Admin\OrderController@toOrder');
       Route::get('order_edit', 'Admin\OrderController@toOrderEdit');
       Route::post('service/order/edit', 'Admin\OrderController@orderEdit');
       Route::get('product', 'Admin\ProductController@toProduct');
       Route::get('product_info', 'Admin\ProductController@toProductInfo');
       Route::get('product_add', 'Admin\ProductController@toProductAdd');
       Route::post('service/product/add', 'Admin\ProductController@productAdd');
       Route::get('member', 'Admin\MemberController@toMember');
       Route::get('member_edit', 'Admin\MemberController@toMemberEdit');
       Route::post('service/member/edit', 'Admin\MemberController@memberEdit');
        });
//       ['uses'=>'memberController@info',
//         ])->where('id','[0-9]+');
//     Route::get('/', function () {
//         return view('member.info');
//     });
// //     Route::get('YSP', function () {
// //         return 'welcome11';
// //     })


// //     Route::post('/hello',function(){
// //         return "Hello Laravel[POST]!";
// //     });

// //     
//     Route::match(['get','post'],'/hello',function(){
//         return "Hello Laravel!";
//     });
// Route::get('/hello/{name?}',function($name="Laravel"){
//     return "Hello {$name}!";
// });
//     Route::get('/hello/laravelacademy/{id}',['as'=>'academy',function($id){
//         return 'Hello LaravelAcademy '.$id.'��';
//     }]);
//         Route::get('/testNamedRoute',function(){
//             return redirect()->route('academy',['id'=>1]);
//         });
//     Route::group(['prefix'=>'laravelacademy'],function(){
//         Route::get('write',function(){
//             return "Write LaravelAcademy";
//         });
//             Route::get('update',function(){
//                 return "Update LaravelAcademy";
//             });
//     });