<?php

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuActionController;
use App\Http\Controllers\UserMenuActionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\SubCategorieController;
use App\Http\Controllers\SizeSettingController;
use App\Http\Controllers\BrandSettingController;
use App\Http\Controllers\ColorSettingController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\PriceRangeController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// frontend
route::get('/',[FrontendController::class,'index']);
route::get('/contact',[FrontendController::class,'contact']);
route::get('/shop',[FrontendController::class,'shop']);
Route::get('/categorie_product/{id}',[FrontendController::class,'categorie_product']);
Route::get('/sub_categorie_product/{id}',[FrontendController::class,'sub_categorie_product']);
Route::get('/flash_sale_product',[FrontendController::class,'flash_sale_product']);
// route::get('/contactUs',[FrontendController::class,'ContactUs']);
// route::get('/officers_info',[FrontendController::class,'officersInfo']);
// route::get('/staffs_info',[FrontendController::class,'staffsInfo']);
// route::get('/organization',[FrontendController::class,'organization']);
// route::get('/institution_details/{id}',[FrontendController::class,'InstitutionDetails']);
// route::get('/teacher_employs',[FrontendController::class,'teacherEmploys']);
// route::get('/teacher_employs_details/{id}',[FrontendController::class,'teacherEmploysDetails']);
// route::get('/attendance_of_teachers',[FrontendController::class,'attendanceOfTeachers']);
// route::get('/attendance_of_students',[FrontendController::class,'attendanceOfStudents']);
// route::get('/trade_students',[FrontendController::class,'tradeStudents']);
// route::get('/result',[FrontendController::class,'result']);
// route::get('/classRoutine',[FrontendController::class,'classRoutine']);
// route::get('/photo_gallery',[FrontendController::class,'photoGallery']);
// route::get('/notice',[FrontendController::class,'notice']);
// route::get('/message_from_regional_director',[FrontendController::class,'RegionalDirectorMessage']);


Auth::routes();


Route::get('/member/login', [LoginController::class, 'showMemberLoginForm'])->name('member.login-view');
Route::post('/member/login', [LoginController::class, 'memberLogin'])->name('member.login');

// member routes
// Route::get('/member', function () {
//     return redirect()->url('member/dashboard');
// });

Route::group(['middleware' => ['member'], 'prefix' => 'member'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Member\DashboardController::class, 'index'])->name('member.dashboard');
    Route::get('/profile', [\App\Http\Controllers\Member\DashboardController::class, 'profile'])->name('member.profile');
});


Route::any('lang/{lang}', function ($lang) {
    session()->put('lang', $lang);
    return redirect()->back();
})->name('lang');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//        Route::get('user/permission/{id}', 'UserController@permission')->name('user.permission');
//    Route::post('user/permission-update/{id}', 'UserController@permissionUpdate')->name('user.permission_update');
//    Route::post('get_role_permission', 'RoleController@getRolePermission')->name('get_role_permission');
//    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile-update', [UserController::class, 'profileUpdate'])->name('user.profile-update');
    Route::post('/change-password', [UserController::class, 'changePassword'])->name('user.change-password');
    Route::post('/user/print', [UserController::class, 'print'])->name('user.print');
    Route::post('/user/status', [UserController::class, 'status'])->name('user.status');
    Route::get('/user/deleted-list', [UserController::class, 'deletedListIndex'])->name('user.deleted_list');
    Route::get('/user/restore/{id}', [UserController::class, 'restore'])->name('user.restore');
    Route::delete('/user/force-delete/{id}', [UserController::class, 'forceDelete'])->name('user.force_destroy');
    Route::resource('user', UserController::class);

    Route::post('/menu/status', 'MenuController@status')->name('menu.status');
    Route::get('/menu/deleted-list', 'MenuController@deletedListIndex')->name('menu.deleted_list');
    Route::get('/menu/restore/{id}', 'MenuController@restore')->name('menu.restore');
    Route::delete('/menu/force-delete/{id}', 'MenuController@forceDelete')->name('menu.force_destroy');
    Route::post('/menu/multiple-delete', 'MenuController@multipleDelete')->name('menu.multiple_delete');
    Route::post('/menu/multiple-restore', 'MenuController@multipleRestore')->name('menu.multiple_restore');
    Route::resource('menu', MenuController::class);


    Route::post('/menu_action/status', 'MenuActionController@status')->name('menu_action.status');
    Route::get('/menu-action/deleted-list', 'MenuActionController@deletedListIndex')->name('menu_action.deleted_list');
    Route::get('/menu-action/restore/{id}', 'MenuActionController@restore')->name('menu_action.restore');
    Route::delete('/menu-action/force-delete/{id}', 'MenuActionController@forceDelete')->name('menu_action.force_destroy');
    Route::resource('menu_action', MenuActionController::class);

    Route::get('menu/action/{menu_id}', [UserMenuActionController::class, 'index'])->name('user_menu_action.index');
    Route::get('menu/action/create/{menu_id}', [UserMenuActionController::class, 'create'])->name('user_menu_action.create');
    Route::post('menu/action/store/{menu_id}', [UserMenuActionController::class, 'store'])->name('user_menu_action.store');
    Route::get('menu/action/edit/{menu_id}/{id}', [UserMenuActionController::class, 'edit'])->name('user_menu_action.edit');
    Route::delete('menu/action/destroy/{menu_id}/{id}', [UserMenuActionController::class, 'destroy'])->name('user_menu_action.destroy');
    Route::post('menu/action/update/{menu_id}/{id}', [UserMenuActionController::class, 'update'])->name('user_menu_action.update');
    Route::post('user/menu/action/status', [UserMenuActionController::class, 'status'])->name('user_menu_action.status');

    Route::get('/role/{id}/permission', [RoleController::class, 'permission'])->name('role.permission');
    Route::post('/role/{id}/permission', [RoleController::class, 'permission'])->name('role.permission.store');
    Route::post('role/print', [RoleController::class, 'print'])->name('role.print');
    Route::post('role/status', [RoleController::class, 'status'])->name('role.status');
    Route::get('/role/deleted-list', [RoleController::class, 'deletedListIndex'])->name('role.deleted_list');
    Route::get('/role/restore/{id}', [RoleController::class, 'restore'])->name('role.restore');
    Route::delete('/role/force-delete/{id}', [RoleController::class, 'forceDelete'])->name('role.force_destroy');
    Route::resource('role', RoleController::class);

    // Route::resources(['notices' => NoticeController::class]);
    // Route::get('notices-delete/{id}', [NoticeController::class, 'deletedListIndex']);
    // Route::get('notices-restore/{id}', [NoticeController::class, 'restore']);

    Route::get('categorieStatusChange/{id}',[CategorieController::class,'categorieStatusChange']);
    Route::get('categorie_restore/{id}',[CategorieController::class,'categorie_restore']);
    Route::get('categorie_delete/{id}',[CategorieController::class,'categorie_delete']);

    Route::get('subcategorieStatusChange/{id}',[SubCategorieController::class,'subcategorieStatusChange']);
    Route::get('subcategorie_restore/{id}',[SubCategorieController::class,'subcategorie_restore']);
    Route::get('subcategorie_delete/{id}',[SubCategorieController::class,'subcategorie_delete']);

    Route::get('sizeStatusChange/{id}',[SizeSettingController::class,'sizeStatusChange']);
    Route::get('size_restore/{id}',[SizeSettingController::class,'size_restore']);
    Route::get('size_delete/{id}',[SizeSettingController::class,'size_delete']);

    Route::get('brandStatusChange/{id}',[BrandSettingController::class,'brandStatusChange']);
    Route::get('brand_restore/{id}',[BrandSettingController::class,'brand_restore']);
    Route::get('brand_delete/{id}',[BrandSettingController::class,'brand_delete']);

    Route::get('colorStatusChange/{id}',[ColorSettingController::class,'colorStatusChange']);
    Route::get('color_restore/{id}',[ColorSettingController::class,'color_restore']);
    Route::get('color_delete/{id}',[ColorSettingController::class,'color_delete']);

    Route::get('priceRangeStatusChange/{id}',[PriceRangeController::class,'priceRangeStatusChange']);
    Route::get('priceRange_restore/{id}',[PriceRangeController::class,'priceRange_restore']);
    Route::get('priceRange_delete/{id}',[PriceRangeController::class,'priceRange_delete']);
    
    Route::get('GetSubCategorie/{cat_id}',[ProductController::class,'GetSubCategorie']);
    Route::get('productStatusChange/{id}',[ProductController::class,'productStatusChange']);
    Route::get('product_restore/{id}',[ProductController::class,'product_restore']);
    Route::get('product_delete/{id}',[ProductController::class,'product_delete']);

    Route::resources([
        'permission' => PermissionController::class,
        'site_settings' => SettingsController::class,
        'categorie' => CategorieController::class,
        'sub_categorie' => SubCategorieController::class,
        'size_setting' => SizeSettingController::class,
        'brand_setting' => BrandSettingController::class,
        'color_setting' => ColorSettingController::class,
        'price_range' => PriceRangeController::class,
        'product' => ProductController::class,
    ]);
});