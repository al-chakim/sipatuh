<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdlingController;
use App\Http\Controllers\PadangController;
use App\Http\Controllers\JakartaController;
use App\Http\Controllers\MakasarController;
use App\Http\Controllers\PandaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Adminp1aController;
use App\Http\Controllers\Adminp1bController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SemarangController;
use App\Http\Controllers\SuralayaController;
use App\Http\Controllers\PalembangController;
use App\Http\Controllers\TuntunganController;
use Modules\K3\Http\Controllers\K3Controller;
use App\Http\Controllers\BanjarbaruController;
use App\Http\Controllers\DaftarakunController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Kantor\Kantor1aController;
use App\Http\Controllers\Kantor\Kantor1bController;
use App\Http\Controllers\Kantor\Kantor2aController;
use App\Http\Controllers\Kantor\Kantor2bController;
use App\Http\Controllers\Kantor\Kantor2cController;
use App\Http\Controllers\Kantor\Kantor2dController;
use App\Http\Controllers\Kantor\Kantor3aController;
use App\Http\Controllers\Kantor\Kantor3bController;
use App\Http\Controllers\Kantor\Kantor4aController;
use App\Http\Controllers\Kantor\Kantor5aController;
use App\Http\Controllers\Kantor\Kantor5bController;
use App\Http\Controllers\Kantor\Kantor5cController;
use App\Http\Controllers\Kantor\Kantor5dController;
use App\Http\Controllers\Kantor\Kantor5eController;
use App\Http\Controllers\Kantor\Kantor6aController;
use App\Http\Controllers\Kantor\Kantor7aController;
use App\Http\Controllers\Kantor\Kantor9aController;
use App\Http\Controllers\Padang\Padang1aController;
use App\Http\Controllers\Padang\Padang1bController;
use App\Http\Controllers\Padang\Padang2aController;
use App\Http\Controllers\Padang\Padang2bController;
use App\Http\Controllers\Padang\Padang2cController;
use App\Http\Controllers\Padang\Padang2dController;
use App\Http\Controllers\Padang\Padang3aController;
use App\Http\Controllers\Padang\Padang3bController;
use App\Http\Controllers\Padang\Padang4aController;
use App\Http\Controllers\Padang\Padang5aController;
use App\Http\Controllers\Padang\Padang5bController;
use App\Http\Controllers\Padang\Padang5cController;
use App\Http\Controllers\Padang\Padang5dController;
use App\Http\Controllers\Padang\Padang5eController;
use App\Http\Controllers\Padang\Padang6aController;
use App\Http\Controllers\Padang\Padang7aController;
use App\Http\Controllers\Padang\Padang7bController;
use App\Http\Controllers\Padang\Padang7cController;
use App\Http\Controllers\Padang\Padang8aController;
use App\Http\Controllers\Padang\Padang9aController;
use App\Http\Controllers\Kantor\TtekantorController;
use App\Http\Controllers\Padang\TtepadangController;
use App\Http\Controllers\Divisibogor\BogorController;
use App\Http\Controllers\Jakarta\Jakarta1aController;
use App\Http\Controllers\Jakarta\Jakarta1bController;
use App\Http\Controllers\Jakarta\Jakarta2aController;
use App\Http\Controllers\Jakarta\Jakarta2bController;
use App\Http\Controllers\Jakarta\Jakarta2cController;
use App\Http\Controllers\Jakarta\Jakarta2dController;
use App\Http\Controllers\Jakarta\Jakarta3aController;
use App\Http\Controllers\Jakarta\Jakarta3bController;
use App\Http\Controllers\Jakarta\Jakarta4aController;
use App\Http\Controllers\Jakarta\Jakarta5bController;
use App\Http\Controllers\Jakarta\Jakarta5cController;
use App\Http\Controllers\Jakarta\Jakarta5dController;
use App\Http\Controllers\Jakarta\Jakarta5eController;
use App\Http\Controllers\Jakarta\Jakarta6aController;
use App\Http\Controllers\Jakarta\Jakarta7aController;
use App\Http\Controllers\Jakarta\Jakarta7bController;
use App\Http\Controllers\Jakarta\Jakarta7cController;
use App\Http\Controllers\Jakarta\Jakarta8aController;
use App\Http\Controllers\Jakarta\Jakarta9aController;
use App\Http\Controllers\Makasar\Makasar1aController;
use App\Http\Controllers\Makasar\Makasar1bController;
use App\Http\Controllers\Makasar\Makasar2aController;
use App\Http\Controllers\Makasar\Makasar2bController;
use App\Http\Controllers\Makasar\Makasar2cController;
use App\Http\Controllers\Makasar\Makasar2dController;
use App\Http\Controllers\Makasar\Makasar3aController;
use App\Http\Controllers\Makasar\Makasar3bController;
use App\Http\Controllers\Makasar\Makasar4aController;
use App\Http\Controllers\Makasar\Makasar5aController;
use App\Http\Controllers\Makasar\Makasar5bController;
use App\Http\Controllers\Makasar\Makasar5cController;
use App\Http\Controllers\Makasar\Makasar5dController;
use App\Http\Controllers\Makasar\Makasar5eController;
use App\Http\Controllers\Makasar\Makasar6aController;
use App\Http\Controllers\Makasar\Makasar7aController;
use App\Http\Controllers\Makasar\Makasar7bController;
use App\Http\Controllers\Makasar\Makasar7cController;
use App\Http\Controllers\Makasar\Makasar8aController;
use App\Http\Controllers\Makasar\Makasar9aController;
use App\Http\Controllers\Pandaan\Pandaan1aController;
use App\Http\Controllers\Pandaan\Pandaan1bController;
use App\Http\Controllers\Pandaan\Pandaan2aController;
use App\Http\Controllers\Pandaan\Pandaan2bController;
use App\Http\Controllers\Pandaan\Pandaan2cController;
use App\Http\Controllers\Pandaan\Pandaan2dController;
use App\Http\Controllers\Pandaan\Pandaan3aController;
use App\Http\Controllers\Pandaan\Pandaan3bController;
use App\Http\Controllers\Pandaan\Pandaan4aController;
use App\Http\Controllers\Pandaan\Pandaan5aController;
use App\Http\Controllers\Pandaan\Pandaan5bController;
use App\Http\Controllers\Pandaan\Pandaan5cController;
use App\Http\Controllers\Pandaan\Pandaan5dController;
use App\Http\Controllers\Pandaan\Pandaan5eController;
use App\Http\Controllers\Pandaan\Pandaan6aController;
use App\Http\Controllers\Pandaan\Pandaan7aController;
use App\Http\Controllers\Pandaan\Pandaan7bController;
use App\Http\Controllers\Pandaan\Pandaan7cController;
use App\Http\Controllers\Pandaan\Pandaan8aController;
use App\Http\Controllers\Pandaan\Pandaan9aController;
use App\Http\Controllers\Jakarta\TtejakartaController;
use App\Http\Controllers\Makasar\TtemakasarController;
use App\Http\Controllers\Pandaan\TtepandaanController;
use App\Http\Controllers\Divisibogor\Admin1aController;
use App\Http\Controllers\Divisibogor\Bogor1bController;
use App\Http\Controllers\Divisibogor\Bogor2aController;
use App\Http\Controllers\Divisibogor\Bogor2bController;
use App\Http\Controllers\Divisibogor\Bogor2cController;
use App\Http\Controllers\Divisibogor\Bogor2dController;
use App\Http\Controllers\Divisibogor\Bogor3aController;
use App\Http\Controllers\Divisibogor\Bogor3bController;
use App\Http\Controllers\Divisibogor\Bogor4aController;
use App\Http\Controllers\Divisibogor\Bogor5aController;
use App\Http\Controllers\Divisibogor\Bogor5bController;
use App\Http\Controllers\Divisibogor\Bogor5cController;
use App\Http\Controllers\Divisibogor\Bogor5dController;
use App\Http\Controllers\Divisibogor\Bogor5eController;
use App\Http\Controllers\Divisibogor\Bogor6aController;
use App\Http\Controllers\Divisibogor\Bogor7aController;
use App\Http\Controllers\Divisibogor\Bogor7bController;
use App\Http\Controllers\Divisibogor\Bogor7cController;
use App\Http\Controllers\Divisibogor\Bogor8aController;
use App\Http\Controllers\Divisibogor\Bogor9aController;
use App\Http\Controllers\Semarang\Semarang1aController;
use App\Http\Controllers\Semarang\Semarang1bController;
use App\Http\Controllers\Semarang\Semarang2aController;
use App\Http\Controllers\Semarang\Semarang2bController;
use App\Http\Controllers\Semarang\Semarang2cController;
use App\Http\Controllers\Semarang\Semarang2dController;
use App\Http\Controllers\Semarang\Semarang3aController;
use App\Http\Controllers\Semarang\Semarang3bController;
use App\Http\Controllers\Semarang\Semarang4aController;
use App\Http\Controllers\Semarang\Semarang5aController;
use App\Http\Controllers\Semarang\Semarang5bController;
use App\Http\Controllers\Semarang\Semarang5cController;
use App\Http\Controllers\Semarang\Semarang5dController;
use App\Http\Controllers\Semarang\Semarang5eController;
use App\Http\Controllers\Semarang\Semarang6aController;
use App\Http\Controllers\Semarang\Semarang7aController;
use App\Http\Controllers\Semarang\Semarang7bController;
use App\Http\Controllers\Semarang\Semarang7cController;
use App\Http\Controllers\Semarang\Semarang8aController;
use App\Http\Controllers\Semarang\Semarang9aController;
use App\Http\Controllers\Suralaya\Suralaya1aController;
use App\Http\Controllers\Suralaya\Suralaya1bController;
use App\Http\Controllers\Suralaya\Suralaya2aController;
use App\Http\Controllers\Suralaya\Suralaya2bController;
use App\Http\Controllers\Suralaya\Suralaya2cController;
use App\Http\Controllers\Suralaya\Suralaya2dController;
use App\Http\Controllers\Suralaya\Suralaya3aController;
use App\Http\Controllers\Suralaya\Suralaya3bController;
use App\Http\Controllers\Suralaya\Suralaya4aController;
use App\Http\Controllers\Suralaya\Suralaya5aController;
use App\Http\Controllers\Suralaya\Suralaya5bController;
use App\Http\Controllers\Suralaya\Suralaya5cController;
use App\Http\Controllers\Suralaya\Suralaya5dController;
use App\Http\Controllers\Suralaya\Suralaya5eController;
use App\Http\Controllers\Suralaya\Suralaya6aController;
use App\Http\Controllers\Suralaya\Suralaya7aController;
use App\Http\Controllers\Suralaya\Suralaya7bController;
use App\Http\Controllers\Suralaya\Suralaya7cController;
use App\Http\Controllers\Suralaya\Suralaya8aController;
use App\Http\Controllers\Suralaya\Suralaya9aController;
use App\Http\Controllers\Divisibogor\TtebogorController;
use App\Http\Controllers\Semarang\TtesemarangController;
use App\Http\Controllers\Suralaya\TtesuralayaController;
use App\Http\Controllers\Suralaya\Tuntungan7aController;
use App\Http\Controllers\Divisibanjar\Banjar1aController;
use App\Http\Controllers\Divisibanjar\Banjar1bController;
use App\Http\Controllers\Divisibanjar\Banjar2aController;
use App\Http\Controllers\Divisibanjar\Banjar2bController;
use App\Http\Controllers\Divisibanjar\Banjar2cController;
use App\Http\Controllers\Divisibanjar\Banjar2dController;
use App\Http\Controllers\Divisibanjar\Banjar3aController;
use App\Http\Controllers\Divisibanjar\Banjar3bController;
use App\Http\Controllers\Divisibanjar\Banjar4aController;
use App\Http\Controllers\Divisibanjar\Banjar5aController;
use App\Http\Controllers\Divisibanjar\Banjar5bController;
use App\Http\Controllers\Divisibanjar\Banjar5cController;
use App\Http\Controllers\Divisibanjar\Banjar5dController;
use App\Http\Controllers\Divisibanjar\Banjar5eController;
use App\Http\Controllers\Divisibanjar\Banjar6aController;
use App\Http\Controllers\Divisibanjar\Banjar7aController;
use App\Http\Controllers\Divisibanjar\Banjar7bController;
use App\Http\Controllers\Divisibanjar\Banjar7cController;
use App\Http\Controllers\Divisibanjar\Banjar8aController;
use App\Http\Controllers\Divisibanjar\Banjar9aController;
use App\Http\Controllers\Divisibogor\Jakarta5aController;
use App\Http\Controllers\Palembang\Palembang1aController;
use App\Http\Controllers\Palembang\Palembang1bController;
use App\Http\Controllers\Palembang\Palembang2aController;
use App\Http\Controllers\Palembang\Palembang2bController;
use App\Http\Controllers\Palembang\Palembang2cController;
use App\Http\Controllers\Palembang\Palembang2dController;
use App\Http\Controllers\Palembang\Palembang3aController;
use App\Http\Controllers\Palembang\Palembang3bController;
use App\Http\Controllers\Palembang\Palembang4aController;
use App\Http\Controllers\Palembang\Palembang5aController;
use App\Http\Controllers\Palembang\Palembang5bController;
use App\Http\Controllers\Palembang\Palembang5cController;
use App\Http\Controllers\Palembang\Palembang5dController;
use App\Http\Controllers\Palembang\Palembang5eController;
use App\Http\Controllers\Palembang\Palembang6aController;
use App\Http\Controllers\Palembang\Palembang7aController;
use App\Http\Controllers\Palembang\Palembang7bController;
use App\Http\Controllers\Palembang\Palembang7cController;
use App\Http\Controllers\Palembang\Palembang8aController;
use App\Http\Controllers\Palembang\Palembang9aController;
use App\Http\Controllers\Tuntungan\Tuntungan1aController;
use App\Http\Controllers\Tuntungan\Tuntungan1bController;
use App\Http\Controllers\Tuntungan\Tuntungan2aController;
use App\Http\Controllers\Tuntungan\Tuntungan2bController;
use App\Http\Controllers\Tuntungan\Tuntungan2cController;
use App\Http\Controllers\Tuntungan\Tuntungan2dController;
use App\Http\Controllers\Tuntungan\Tuntungan3aController;
use App\Http\Controllers\Tuntungan\Tuntungan3bController;
use App\Http\Controllers\Tuntungan\Tuntungan4aController;
use App\Http\Controllers\Tuntungan\Tuntungan5aController;
use App\Http\Controllers\Tuntungan\Tuntungan5bController;
use App\Http\Controllers\Tuntungan\Tuntungan5cController;
use App\Http\Controllers\Tuntungan\Tuntungan5eController;
use App\Http\Controllers\Tuntungan\Tuntungan6aController;
use App\Http\Controllers\Tuntungan\Tuntungan7bController;
use App\Http\Controllers\Tuntungan\Tuntungan7cController;
use App\Http\Controllers\Tuntungan\Tuntungan8aController;
use App\Http\Controllers\Tuntungan\Tuntungan9aController;
use Modules\Keamanan\Http\Controllers\KeamananController;
use App\Http\Controllers\Divisibanjar\TtebanjarController;
use App\Http\Controllers\Palembang\TtepalembangController;
use Modules\Lingkungan\Http\Controllers\LingkunganController;

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
    return redirect('/login');
});

Route::middleware('auth')->controller(UserController::class)->prefix('user')->group(function ()
{
    Route::get('/','index')->name('user');

    Route::get('/create','create')->name('user/create');



    Route::get('/edit/{id}', 'edit')->name('user/edit')->where('id','[0-9]+');

    Route::post('/update', 'update')->name('user/update')->where('id','[0-9]+');

    Route::get('/destroy/{id}', 'destroy')->name('user/destroy')->where('id','[0-9]+');


});

Route::middleware('auth')->controller(ProfileController::class)->prefix("profile")->group(function (){

    Route::get('/edit','edit')->name('profile/edit');

    Route::post('/update','update')->name('profile/update');

    Route::post('/updatePassword','updatePassword')->name('profile/updatePassword');

});

Route::middleware('auth')->controller(RoleController::class)->prefix("role")->group(function (){

Route::get('/', 'index')->name('role');

Route::get('/create', 'create')->name('role/create');

Route::post('/store', 'store')->name('role/store');

Route::get('/edit/{id}', 'edit')->name('role/edit')->where('id','[0-9]+');

Route::post('/update', 'update')->name('role/update')->where('id','[0-9]+');

Route::get('/destroy/{id}', 'destroy')->name('role/destroy')->where('id','[0-9]+');

});


Route::middleware('auth')->controller(CategoryController::class)->prefix("category")->group(function (){

    Route::get('/', 'index')->name('category');

    Route::get('/create', 'create')->name('category/create');

    Route::post('/store', 'store')->name('category/store');

    Route::get('/edit/{id}', 'edit')->name('category/edit')->where('id','[0-9]+');

    Route::post('/update', 'update')->name('category/update')->where('id','[0-9]+');

    Route::get('/destroy/{id}', 'destroy')->name('category/destroy')->where('id','[0-9]+');

});

Auth::routes();
Route::resource('/daftar', DaftarakunController::class  );
Route::resource('/adling', AdlingController::class  );
Route::resource('/halaman', BogorController::class  );
Route::resource('/banjar', BanjarbaruController::class  );
Route::resource('/jkt', JakartaController::class  );
Route::resource('/makasar', MakasarController::class  );
Route::resource('/sura', SuralayaController::class  );
Route::resource('/padang', PadangController::class  );
Route::resource('/palembang', PalembangController::class  );
Route::resource('/pandaan', PandaanController::class  );
Route::resource('/semar', SemarangController::class  );
Route::resource('/tun', TuntunganController::class  );
Route::resource('/admin1a', Admin1aController::class  );
Route::resource('/bogor1b', Bogor1bController::class  );
Route::resource('/bogor2a', Bogor2aController::class  );
Route::resource('/bogor2b', Bogor2bController::class  );
Route::resource('/bogor2c', Bogor2cController::class  );
Route::resource('/bogor2d', Bogor2dController::class  );
Route::resource('/bogor3a', Bogor3aController::class  );
Route::resource('/bogor3b', Bogor3bController::class  );
Route::resource('/bogor4a', Bogor4aController::class  );
Route::resource('/bogor5a', Bogor5aController::class  );
Route::resource('/bogor5b', Bogor5bController::class  );
Route::resource('/bogor5c', Bogor5cController::class  );
Route::resource('/bogor5d', Bogor5dController::class  );
Route::resource('/bogor5e', Bogor5eController::class  );
Route::resource('/banjar1a', Banjar1aController::class  );
Route::resource('/banjar1b', Banjar1bController::class  );
Route::resource('/banjar2a', Banjar2aController::class  );
Route::resource('/banjar2b', Banjar2bController::class  );
Route::resource('/banjar2c', Banjar2cController::class  );
Route::resource('/banjar2d', Banjar2dController::class  );
Route::resource('/banjar3a', Banjar3aController::class  );
Route::resource('/banjar3b', Banjar3bController::class  );
Route::resource('/banjar4a', Banjar4aController::class  );
Route::resource('/banjar5a', Banjar5aController::class  );
Route::resource('/banjar5b', Banjar5bController::class  );
Route::resource('/banjar5c', Banjar5cController::class  );
Route::resource('/banjar5d', Banjar5dController::class  );
Route::resource('/banjar5e', Banjar5eController::class  );
Route::resource('/kantor1a', Kantor1aController::class  );
Route::resource('/kantor1b', Kantor1bController::class  );
Route::resource('/kantor2a', Kantor2aController::class  );
Route::resource('/kantor2b', Kantor2bController::class  );
Route::resource('/kantor2c', Kantor2cController::class  );
Route::resource('/kantor2d', Kantor2dController::class  );
Route::resource('/kantor3a', Kantor3aController::class  );
Route::resource('/kantor3b', Kantor3bController::class  );
Route::resource('/kantor4a', Kantor4aController::class  );
Route::resource('/kantor5a', Kantor5aController::class  );
Route::resource('/kantor5b', Kantor5bController::class  );
Route::resource('/kantor5c', Kantor5cController::class  );
Route::resource('/kantor5d', Kantor5dController::class  );
Route::resource('/kantor5e', Kantor5eController::class  );
Route::resource('/jakarta1a', Jakarta1aController::class  );
Route::resource('/jakarta1b', Jakarta1bController::class  );
Route::resource('/jakarta2a', Jakarta2aController::class  );
Route::resource('/jakarta2b', Jakarta2bController::class  );
Route::resource('/jakarta2c', Jakarta2cController::class  );
Route::resource('/jakarta2d', Jakarta2dController::class  );
Route::resource('/jakarta3a', Jakarta3aController::class  );
Route::resource('/jakarta3b', Jakarta3bController::class  );
Route::resource('/jakarta4a', Jakarta4aController::class  );
Route::resource('/jakarta5a', Jakarta5aController::class  );
Route::resource('/jakarta5b', Jakarta5bController::class  );
Route::resource('/jakarta5c', Jakarta5cController::class  );
Route::resource('/jakarta5d', Jakarta5dController::class  );
Route::resource('/jakarta5e', Jakarta5eController::class  );
Route::resource('/makasar1a', Makasar1aController::class  );
Route::resource('/makasar1b', Makasar1bController::class  );
Route::resource('/makasar2a', Makasar2aController::class  );
Route::resource('/makasar2b', Makasar2bController::class  );
Route::resource('/makasar2c', Makasar2cController::class  );
Route::resource('/makasar2d', Makasar2dController::class  );
Route::resource('/makasar3a', Makasar3aController::class  );
Route::resource('/makasar3b', Makasar3bController::class  );
Route::resource('/makasar4a', Makasar4aController::class  );
Route::resource('/makasar5a', Makasar5aController::class  );
Route::resource('/makasar5b', Makasar5bController::class  );
Route::resource('/makasar5c', Makasar5cController::class  );
Route::resource('/makasar5d', Makasar5dController::class  );
Route::resource('/makasar5e', Makasar5eController::class  );
Route::resource('/padang1a', Padang1aController::class  );
Route::resource('/padang1b', Padang1bController::class  );
Route::resource('/padang2a', Padang2aController::class  );
Route::resource('/padang2b', Padang2bController::class  );
Route::resource('/padang2c', Padang2cController::class  );
Route::resource('/padang2d', Padang2dController::class  );
Route::resource('/padang3a', Padang3aController::class  );
Route::resource('/padang3b', Padang3bController::class  );
Route::resource('/padang4a', Padang4aController::class  );
Route::resource('/padang5a', Padang5aController::class  );
Route::resource('/padang5b', Padang5bController::class  );
Route::resource('/padang5c', Padang5cController::class  );
Route::resource('/padang5d', Padang5dController::class  );
Route::resource('/padang5e', Padang5eController::class  );
Route::resource('/palembang1a', Palembang1aController::class  );
Route::resource('/palembang1b', Palembang1bController::class  );
Route::resource('/palembang2a', Palembang2aController::class  );
Route::resource('/palembang2b', Palembang2bController::class  );
Route::resource('/palembang2c', Palembang2cController::class  );
Route::resource('/palembang2d', Palembang2dController::class  );
Route::resource('/palembang3a', Palembang3aController::class  );
Route::resource('/palembang3b', Palembang3bController::class  );
Route::resource('/palembang4a', Palembang4aController::class  );
Route::resource('/palembang5a', Palembang5aController::class  );
Route::resource('/palembang5b', Palembang5bController::class  );
Route::resource('/palembang5c', Palembang5cController::class  );
Route::resource('/palembang5d', Palembang5dController::class  );
Route::resource('/palembang5e', Palembang5eController::class  );
Route::resource('/pandaan1a', Pandaan1aController::class  );
Route::resource('/pandaan1b', Pandaan1bController::class  );
Route::resource('/pandaan2a', Pandaan2aController::class  );
Route::resource('/pandaan2b', Pandaan2bController::class  );
Route::resource('/pandaan2c', Pandaan2cController::class  );
Route::resource('/pandaan2d', Pandaan2dController::class  );
Route::resource('/pandaan3a', Pandaan3aController::class  );
Route::resource('/pandaan3b', Pandaan3bController::class  );
Route::resource('/pandaan4a', Pandaan4aController::class  );
Route::resource('/pandaan5a', Pandaan5aController::class  );
Route::resource('/pandaan5b', Pandaan5bController::class  );
Route::resource('/pandaan5c', Pandaan5cController::class  );
Route::resource('/pandaan5d', Pandaan5dController::class  );
Route::resource('/pandaan5e', Pandaan5eController::class  );
Route::resource('/semar1a', Semarang1aController::class  );
Route::resource('/semar1b', Semarang1bController::class  );
Route::resource('/semar2a', Semarang2aController::class  );
Route::resource('/semar2b', Semarang2bController::class  );
Route::resource('/semar2c', Semarang2cController::class  );
Route::resource('/semar2d', Semarang2dController::class  );
Route::resource('/semar3a', Semarang3aController::class  );
Route::resource('/semar3b', Semarang3bController::class  );
Route::resource('/semar4a', Semarang4aController::class  );
Route::resource('/semar5a', Semarang5aController::class  );
Route::resource('/semar5b', Semarang5bController::class  );
Route::resource('/semar5c', Semarang5cController::class  );
Route::resource('/semar5d', Semarang5dController::class  );
Route::resource('/semar5e', Semarang5eController::class  );
Route::resource('/sura1a', Suralaya1aController::class  );
Route::resource('/sura1b', Suralaya1bController::class  );
Route::resource('/sura2a', Suralaya2aController::class  );
Route::resource('/sura2b', Suralaya2bController::class  );
Route::resource('/sura2c', Suralaya2cController::class  );
Route::resource('/sura2d', Suralaya2dController::class  );
Route::resource('/sura3a', Suralaya3aController::class  );
Route::resource('/sura3b', Suralaya3bController::class  );
Route::resource('/sura4a', Suralaya4aController::class  );
Route::resource('/sura5a', Suralaya5aController::class  );
Route::resource('/sura5b', Suralaya5bController::class  );
Route::resource('/sura5c', Suralaya5cController::class  );
Route::resource('/sura5d', Suralaya5dController::class  );
Route::resource('/sura5e', Suralaya5eController::class  );
Route::resource('/tun1a', Tuntungan1aController::class  );
Route::resource('/tun1b', Tuntungan1bController::class  );
Route::resource('/tun2a', Tuntungan2aController::class  );
Route::resource('/tun2b', Tuntungan2bController::class  );
Route::resource('/tun2c', Tuntungan2cController::class  );
Route::resource('/tun2d', Tuntungan2dController::class  );
Route::resource('/tun3a', Tuntungan3aController::class  );
Route::resource('/tun3b', Tuntungan3bController::class  );
Route::resource('/tun4a', Tuntungan4aController::class  );
Route::resource('/tun5a', Tuntungan5aController::class  );
Route::resource('/tun5b', Tuntungan5bController::class  );
Route::resource('/tun5c', Tuntungan5cController::class  );
Route::resource('/tun5c', Tuntungan5cController::class  );
Route::resource('/tun5e', Tuntungan5eController::class  );
Route::resource('/bogor6a', Bogor6aController::class  );
Route::resource('/bogor7a', Bogor7aController::class  );
Route::resource('/bogor7b', Bogor7bController::class  );
Route::resource('/bogor7c', Bogor7cController::class  );
Route::resource('/bogor8a', Bogor8aController::class  );
Route::resource('/bogor9a', Bogor9aController::class  );
Route::resource('/banjar6a', Banjar6aController::class  );
Route::resource('/banjar7a', Banjar7aController::class  );
Route::resource('/banjar7b', Banjar7bController::class  );
Route::resource('/banjar7c', Banjar7cController::class  );
Route::resource('/banjar8a', Banjar8aController::class  );
Route::resource('/banjar9a', Banjar9aController::class  );
Route::resource('/jakarta6a', Jakarta6aController::class  );
Route::resource('/jakarta7a', Jakarta7aController::class  );
Route::resource('/jakarta7b', Jakarta7bController::class  );
Route::resource('/jakarta7c', Jakarta7cController::class  );
Route::resource('/jakarta8a', Jakarta8aController::class  );
Route::resource('/jakarta9a', Jakarta9aController::class  );
Route::resource('/kantor6a', Kantor6aController::class  );
Route::resource('/kantor7a', Kantor7aController::class  );
Route::resource('/kantor7b', Kantor7Cbontroller::class  );
Route::resource('/kantor7c', Kantor7Cocntroller::class  );
Route::resource('/kantor8a', Kantor8aController::class  );
Route::resource('/kantor9a', Kantor9aController::class  );
Route::resource('/makasar6a', Makasar6aController::class  );
Route::resource('/makasar7a', Makasar7aController::class  );
Route::resource('/makasar7b', Makasar7bController::class  );
Route::resource('/makasar7c', Makasar7cController::class  );
Route::resource('/makasar8a', Makasar8aController::class  );
Route::resource('/makasar9a', Makasar9aController::class  );
Route::resource('/padang6a', Padang6aController::class  );
Route::resource('/padang7a', Padang7aController::class  );
Route::resource('/padang7b', Padang7bController::class  );
Route::resource('/padang7c', Padang7cController::class  );
Route::resource('/padang8a', Padang8aController::class  );
Route::resource('/padang9a', Padang9aController::class  );
Route::resource('/palembang6a', Palembang6aController::class  );
Route::resource('/palembang7a', Palembang7aController::class  );
Route::resource('/palembang7b', Palembang7bController::class  );
Route::resource('/palembang7c', Palembang7cController::class  );
Route::resource('/palembang8a', Palembang8aController::class  );
Route::resource('/palembang9a', Palembang9aController::class  );
Route::resource('/pandaan6a', Pandaan6aController::class  );
Route::resource('/pandaan7a', Pandaan7aController::class  );
Route::resource('/pandaan7b', Pandaan7bController::class  );
Route::resource('/pandaan7c', Pandaan7cController::class  );
Route::resource('/pandaan8a', Pandaan8aController::class  );
Route::resource('/pandaan9a', Pandaan9aController::class  );
Route::resource('/semar6a', Semarang6aController::class  );
Route::resource('/semar7a', Semarang7aController::class  );
Route::resource('/semar7b', Semarang7bController::class  );
Route::resource('/semar7c', Semarang7cController::class  );
Route::resource('/semar8a', Semarang8aController::class  );
Route::resource('/semar9a', Semarang9aController::class  );
Route::resource('/sura6a', Suralaya6aController::class  );
Route::resource('/sura7a', Suralaya7aController::class  );
Route::resource('/sura7b', Suralaya7bController::class  );
Route::resource('/sura7c', Suralaya7cController::class  );
Route::resource('/sura8a', Suralaya8aController::class  );
Route::resource('/sura9a', Suralaya9aController::class  );
Route::resource('/tun6a', Tuntungan6aController::class  );
Route::resource('/tun7a', Tuntungan7aController::class  );
Route::resource('/tun7b', Tuntungan7bController::class  );
Route::resource('/tun7c', Tuntungan7cController::class  );
Route::resource('/tun8a', Tuntungan8aController::class  );
Route::resource('/tun9a', Tuntungan9aController::class  );
Route::get('k3::index', [K3Controller::class, 'index'])->name('k3');
Route::get('keamanan::index', [KeamananController::class, 'index'])->name('keamanan');
Route::get('lingkungan::index', [LingkunganController::class, 'index'])->name('lingkungan');
Route::get('/home', [HomeController::class, 'index'])->name('home');

//tte bogor p1a
Route::get('/ttebogor1a2', [TtebogorController::class, 'tw2'])->name('ttebogor1a2');
Route::get('/ttebogor1a1', [TtebogorController::class, 'index'])->name('ttebogor1a1');
Route::get('/ttebogor1a3', [TtebogorController::class, 'tw3'])->name('ttebogor1a3');
Route::get('/ttebogor1a4', [TtebogorController::class, 'tw4'])->name('ttebogor1a4');

//tte kantor p1a
Route::get('/ttekantor1a2', [TtekantorController::class, 'tw2'])->name('ttekantor1a2');
Route::get('/ttekantor1a1', [TtekantorController::class, 'index'])->name('ttekantor1a1');
Route::get('/ttekantor1a3', [TtekantorController::class, 'tw3'])->name('ttekantor1a3');
Route::get('/ttekantor1a4', [TtekantorController::class, 'tw4'])->name('ttekantor1a4');

//tte banjar p1a
Route::get('/ttebanjar1a2', [TtebanjarController::class, 'tw2'])->name('ttebanjar1a2');
Route::get('/ttebanjar1a1', [TtebanjarController::class, 'index'])->name('ttebanjar1a1');
Route::get('/ttebanjar1a3', [TtebanjarController::class, 'tw3'])->name('ttebanjar1a3');
Route::get('/ttebanjar1a4', [TtebanjarController::class, 'tw4'])->name('ttebanjar1a4');

//tte jakarta p1a
Route::get('/ttejakarta1a2', [TtejakartaController::class, 'tw2'])->name('ttejakarta1a2');
Route::get('/ttejakarta1a1', [TtejakartaController::class, 'index'])->name('ttejakarta1a1');
Route::get('/ttejakarta1a3', [TtejakartaController::class, 'tw3'])->name('ttejakarta1a3');
Route::get('/ttejakarta1a4', [TtejakartaController::class, 'tw4'])->name('ttejakarta1a4');

//tte makasar p1a
Route::get('/ttemakasar1a2', [TtemakasarController::class, 'tw2'])->name('ttemakasar1a2');
Route::get('/ttemakasar1a1', [TtemakasarController::class, 'index'])->name('ttemakasar1a1');
Route::get('/ttemakasar1a3', [TtemakasarController::class, 'tw3'])->name('ttemakasar1a3');
Route::get('/ttemakasar1a4', [TtemakasarController::class, 'tw4'])->name('ttemakasar1a4');

//tte padang p1a
Route::get('/ttepadang1a2', [TtepadangController::class, 'tw2'])->name('ttepadang1a2');
Route::get('/ttepadang1a1', [TtepadangController::class, 'index'])->name('ttepadang1a1');
Route::get('/ttepadang1a3', [TtepadangController::class, 'tw3'])->name('ttepadang1a3');
Route::get('/ttepadang1a4', [TtepadangController::class, 'tw4'])->name('ttepadang1a4');

//tte palembang p1a
Route::get('/ttepalembang1a2', [TtepalembangController::class, 'tw2'])->name('ttepalembang1a2');
Route::get('/ttepalembang1a1', [TtepalembangController::class, 'index'])->name('ttepalembang1a1');
Route::get('/ttepalembang1a3', [TtepalembangController::class, 'tw3'])->name('ttepalembang1a3');
Route::get('/ttepalembang1a4', [TtepalembangController::class, 'tw4'])->name('ttepalembang1a4');

//tte pandaan p1a
Route::get('/ttepandaan1a2', [TtepandaanController::class, 'tw2'])->name('ttepandaan1a2');
Route::get('/ttepandaan1a1', [TtepandaanController::class, 'index'])->name('ttepandaan1a1');
Route::get('/ttepandaan1a3', [TtepandaanController::class, 'tw3'])->name('ttepandaan1a3');
Route::get('/ttepandaan1a4', [TtepandaanController::class, 'tw4'])->name('ttepandaan1a4');

//tte semarang p1a
Route::get('/ttesemarang1a2', [TtesemarangController::class, 'tw2'])->name('ttesemarang1a2');
Route::get('/ttesemarang1a1', [TtesemarangController::class, 'index'])->name('ttesemarang1a1');
Route::get('/ttesemarang1a3', [TtesemarangController::class, 'tw3'])->name('ttesemarang1a3');
Route::get('/ttesemarang1a4', [TtesemarangController::class, 'tw4'])->name('ttesemarang1a4');

//tte suralaya p1a
Route::get('/ttesuralaya1a2', [TtesuralayaController::class, 'tw2'])->name('ttesuralaya1a2');
Route::get('/ttesuralaya1a1', [TtesuralayaController::class, 'index'])->name('ttesuralaya1a1');
Route::get('/ttesuralaya1a3', [TtesuralayaController::class, 'tw3'])->name('ttesuralaya1a3');
Route::get('/ttesuralaya1a4', [TtesuralayaController::class, 'tw4'])->name('ttesuralaya1a4');
