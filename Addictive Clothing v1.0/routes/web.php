<?php
/*================================================================
ROUTE PAGE
*/
Route::group(['namespace' => 'page'], function () {
    Route::get('/', 'homeController@index')->name('home.index');
    Route::get('/detail/{id_barang}', 'DetailController@show')->name('detail.show');
    Route::get('/checkout/{id_barang}', 'CheckoutController@checkout')->name('checkout');
    Route::post('/checkout/process', 'PesananController@process')->name('checkout.add');
    Route::get('/coba', 'PesananController@coba');
    Route::middleware('auth')->group(function () {
        Route::get('/favorite/add/{id}', 'homeController@addToFavorite')->name('add.favorite');
        Route::get('/favorite', 'FavoriteController@index')->name('favorite');
        Route::get('/favorite/remove/{id}', 'FavoriteController@remove')->name('remove.favorite');
        Route::get('/profile', 'ProfileController@index')->name('profile');
        Route::get('/ubah', 'ProfileController@ubahshow')->name('ubah');
        Route::post('profile/ubah', 'ProfileController@ubah')->name('profile.ubah');
        Route::get('/pesanan', 'PesananController@index')->name('pesanan');
        Route::get('/pesanan/bayar/{id}', 'PesananController@showBayar')->name('bayar');
        Route::post('/pesanan/bayar/{id}/upload-bukti', 'PesananController@uploadBukti')->name('pesanan.upload');
    });
});

/*================================================================
ROUTE ADMIN
*/
Route::group(['namespace' => 'admin'], function (){
    Route::middleware('auth', 'admin.only')->group(function () {
        Route::get('/input', 'InputController@index')->name('input');
        Route::post('/input', 'InputController@store')->name('input.store');
        Route::get('/input/success', function () {
            return view('pengelola.input');
        })->name('input.success');
        Route::get('/user', 'UserController@index')->name('user');
        Route::delete('/user/{id}', 'UserController@destroy')->name('user.delete');
        Route::get('/barang', 'BarangController@index')->name('barang');
        Route::delete('/barang/{id_barang}', 'BarangController@destroy')->name('barang.delete');
        Route::get('/barang/{id_barang}/edit', 'BarangController@edit')->name('barang.edit');
        Route::put('/barang/{id_barang}', 'BarangController@update')->name('barang.update');
        Route::get('/konfirmasi', 'UserKonfirmasiController@index')->name('konfirmasi');
        Route::get('/konfirmasi/{id}', 'UserKonfirmasiController@konfirmasi')->name('konfirmasi-user');
        Route::put('/konfirmasi/{id}/update', 'UserKonfirmasiController@update')->name('konfirmasi-update');
    });
});
/*================================================================
ROUTE ACCOUNT
*/
Route::group(['namespace' => 'account'], function (){
    Route::get('/register', 'RegisterController@index')->name('register.index')->middleware('guest');
    Route::post('register', 'RegisterController@store')->name('register.store');
    Route::get('/login', 'AuthController@showLoginForm')->name('login')->middleware('guest');
    Route::post('/login', 'AuthController@login');
    Route::post('/logout', 'AuthController@logout')->name('logout')->middleware('auth');    
});
