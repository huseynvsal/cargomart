<?php
use Illuminate\Support\Facades\Route;
use App\Prices\Prices;
use App\Countries\Countries;
use App\Stores\Stores;
use App\News\News;
use App\Users\Users;
use App\Orders\Orders;
use App\About\About;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Main\MainController;
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

Route::get('/', function () {
    $countries = Countries::all();
    $prices = Prices::query()
        ->join('countries','countries.id', 'prices.country')
        ->select('prices.id as id','countries.id as country_id', 'price', 'type', 'countries.country as country', 'weight')
        ->get();
    $stores = Stores::all();
    $news = News::all();
    return view('main.mainpage',[
        'countries' => $countries,
        'prices' => $prices,
        'stores' => $stores,
        'news' => $news
    ]);
});

Route::get('/register', function () {
    return view('main.register');
});

Route::get('/login', function () {
    return view('main.login');
});

Route::get('/about', function () {
    $about = About::find(1);
    return view('main.about',[
        'about' => $about
    ]);
});

Route::get('/add_about', function () {
    return view('admin.about');
})->middleware('admin');

Route::get('/new/{id}', function ($id) {
    $news = News::find($id);
    return view('main.new',[
        'news' => $news
    ]);
});

Route::get('/admin', function () {
    $prices = Prices::query()
        ->join('countries','countries.id', 'prices.country')
        ->select('prices.id as id', 'price', 'type', 'countries.country as country', 'weight')
        ->get();
    $countries = Countries::all();
    return view('admin.table',[
        'prices' => $prices,
        'countries' => $countries
    ]);
})->middleware('admin');

Route::get('/countries', function () {
    $countries = Countries::all();
    return view('admin.countries',[
        'countries' => $countries
    ]);
})->middleware('admin');

Route::get('/stores', function () {
    $stores = Stores::all();
    return view('admin.stores',[
        'stores' => $stores
    ]);
})->middleware('admin');

Route::get('/news', function () {
    $news = News::all();
    return view('admin.news',[
        'news' => $news
    ]);
})->middleware('admin');

Route::get('/orders', function () {
    $orders = Orders::query()
    ->join('countries', 'orders.storage', 'countries.id')
    ->select('countries.country as storage', 'orders.id as id', 'user_id', 'website', 'track', 'category', 'count', 'price', 'currency', 'invoice', 'information', 'status', 'liquid','orders.created_at as created_at')
    ->orderBy('created_at', 'DESC')
    ->get();
    return view('admin.orders',[
        'orders' => $orders
    ]);
})->middleware('admin');

Route::get('/edit_news/{id}', function ($id) {
    $new = News::find($id);
    return view('admin.edit_news',[
        'new' => $new
    ]);
})->middleware('admin');

Route::get('/edit_orders/{id}', function ($id) {
    $order = Orders::query()
        ->join('countries', 'orders.storage', 'countries.id')
        ->select('countries.country as storage', 'countries.id as country_id', 'orders.id as id', 'user_id', 'website', 'track', 'category', 'count', 'price', 'currency', 'invoice', 'information', 'status', 'liquid')
        ->where('orders.id', $id)
        ->get();
    $countries = Countries::all();
    return view('admin.edit_orders',[
        'order' => $order,
        'countries' => $countries
    ]);
})->middleware('admin');

Route::get('/add_news', function () {
    return view('admin.add_news');
})->middleware('admin');

Route::get('/cabinet', function () {
    $user = Users::find(Auth::id());
    return view('main.cabinet');
})->middleware('auth');

Route::get('/currency', function () {
    $currency = xml_decode(file_get_contents('https://www.cbar.az/currencies/'.date("d.m.Y").'.xml'));
    dd($currency['ValType'][1]['Valute']);
});

Auth::routes();

Route::post('/add_price',[AdminController::class, 'add_price'])->name( 'add_price')->middleware('admin');
Route::post('/edit_price',[AdminController::class, 'edit_price'])->name( 'edit_price')->middleware('admin');
Route::post('/delete_price',[AdminController::class, 'delete_price'])->name( 'delete_price')->middleware('admin');

Route::post('/add_country',[AdminController::class, 'add_country'])->name( 'add_country')->middleware('admin');
Route::post('/edit_country',[AdminController::class, 'edit_country'])->name( 'edit_country')->middleware('admin');
Route::post('/delete_country',[AdminController::class, 'delete_country'])->name( 'delete_country')->middleware('admin');

Route::post('/add_store',[AdminController::class, 'add_store'])->name( 'add_store')->middleware('admin');
Route::post('/edit_store',[AdminController::class, 'edit_store'])->name( 'edit_store')->middleware('admin');
Route::post('/delete_store',[AdminController::class, 'delete_store'])->name( 'delete_store')->middleware('admin');

Route::post('/add_news',[AdminController::class, 'add_news'])->name( 'add_news')->middleware('admin');
Route::post('/edit_news',[AdminController::class, 'edit_news'])->name( 'edit_news')->middleware('admin');
Route::post('/delete_news',[AdminController::class, 'delete_news'])->name( 'delete_news')->middleware('admin');

Route::post('/add_order',[MainController::class, 'add_order'])->name( 'add_order')->middleware('auth');
Route::post('/edit_order',[AdminController::class, 'edit_order'])->name( 'edit_order')->middleware('admin');
Route::post('/delete_order',[AdminController::class, 'delete_order'])->name( 'delete_order')->middleware('admin');

Route::post('/add_user',[MainController::class, 'add_user'])->name( 'add_user')->middleware('auth');
Route::post('/edit_user',[MainController::class, 'edit_user'])->name( 'edit_user')->middleware('auth');

Route::post('/about',[AdminController::class, 'about'])->name( 'about')->middleware('admin');

