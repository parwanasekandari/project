<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index');


// Route for session or middleware

Route::group(['middleware'=>'auth'],function(){
// index page route
Route::get("Admin","table_post@show");
Route::get('p_edit/{id}','table_post@edit');
Route::patch('p_update/{id}','table_post@update');
// book routs
Route::get("book",'bookController@show');
Route::get('b_delete/{id}','bookController@delete');
Route::post('insert','bookController@insert');
Route::get('insert',function(){
  return view('pages.book_add');
});
Route::get('edit/{id}','bookController@edit');
Route::patch('update/{id}','bookController@update');

// magazine routs
Route::get("magazine",'magazineController@show');
Route::get('mg_delete/{id}','magazineController@delete');
Route::get('mg_edit/{id}','magazineController@edit');
Route::patch('mg_update/{id}','magazineController@update');
Route::post('mg_insert','magazineController@insert');
Route::get('mg_insert',function(){
  return view('pages.magazine_add');
});
  // magazine Barrow Routes
Route::get("borrow_magazine",'magazineController@select');
Route::post('mgborrow_insert','magazineController@insert_borrow');
Route::get('mgborrow_insert',function(){
  return view('pages.magazine_borrow_add');
});
Route::get('mag_barrow_edit/{id}','magazineController@edit1');
Route::patch('magazine_barrow_update/{id}','magazineController@update1');
Route::get('magazine_barrow_delete/{id}','magazineController@delete1');


// routes for monograph
Route::get('monograph','monographController@show');
Route::get('m_edit/{id}','monographController@edit');
Route::patch('m_update/{id}','monographController@update');
Route::get('deletes/{id}','monographController@delete');
Route::post('m_insert','monographController@insert');
Route::get('m_insert',function(){
  return view('pages.momograph_add');
});

// routes for members
Route::get('member','memberController@show');
Route::get('member_detail/{id}','memberController@detail');
Route::get('member_edit/{id}','memberController@edit');
Route::patch('member_update/{id}','memberController@update');
Route::get('member_delete/{id}','memberController@delete');
Route::post('mr_insert','memberController@insert');
Route::get('member_insert',function(){
  return view('pages.member_add');
});


// Borrow Book Routes

Route::get('borrow','borrowController@show');
Route::get('borrow_delete/{id}','borrowController@delete');
Route::post('borrow_insert','borrowController@insert');
Route::get('borrow_insert',function(){
  return view('pages.borrow_add');
});
Route::get('borrow_edit/{id}','borrowController@edit');
Route::patch('borrow_update/{id}','borrowController@update');


// Dari Routes

	Route::get('localization/{lang?}','LanguageLocalizationController@index');
  Route::get("D_Admin","table_post@d_show");
  Route::get('d_post_edit/{id}','table_post@d_edit');
  Route::patch('dari_update/{id}','table_post@d_update');

  // Dari book routs
  Route::get("dari_book",'bookController@dari_show');
  Route::post('dari_insert','bookController@dari_insert');
  Route::get('dari_insert',function(){
    return view('pages.book_dari_add');
  });
  Route::get('dari_edit/{id}','bookController@dari_edit');
  Route::patch('dari_update/{id}','bookController@dari_update');

  // ِDari Book barrow Routes

  Route::get('dari_barrow','borrowController@dari_show');
  Route::get('borrow_delete/{id}','borrowController@delete');
  Route::post('dari_barrow_insert','borrowController@dari_insert');
  Route::get('dari_barrow_insert',function(){
    return view('pages.book_dari_borrow_add');
  });
  Route::get('book_borrow_edit/{id}','borrowController@dari_edit');
  Route::patch('book_borrow_update/{id}','borrowController@dari_update');

  //  End of Dari Book Routes

  // Dari monograph routes
  Route::get('dari_monograph','monographController@dari_show');
  Route::get('dari_mono_edit/{id}','monographController@dari_edit');
  Route::patch('dari_mono_update/{id}','monographController@dari_update');
  Route::post('dari_m_insert','monographController@dari_insert');
  Route::get('dari_m_insert',function(){
    return view('pages.monograp_dari_add');
  });

  // End of Dari Monograph routes

  // routes for Dari members
  Route::get('Dari_member','memberController@dari_show');
  Route::get('dari_member_detail/{id}','memberController@dari_detail');
  Route::get('member_edit/{id}','memberController@edit');
  Route::patch('member_update/{id}','memberController@update');
  Route::get('member_delete/{id}','memberController@delete');
  Route::post('dari_member_insert','memberController@dari_insert');
  Route::get('dari_member_insert',function(){
    return view('pages.member_dari_add');
  });

// Dari magzine routes

Route::get("dari_magazine",'magazineController@dari_show');
Route::get('mg_delete/{id}','magazineController@delete');
Route::get('dari_mg_edit/{id}','magazineController@dari_edit');
Route::patch('dari_mg_update/{id}','magazineController@dari_update');
Route::post('dari_mg_insert','magazineController@dari_insert');
Route::get('dari_mg_insert',function(){
  return view('pages.magazine_dari_add');
});
  // magazine Barrow Routes
Route::get("dari_borrow_magazine",'magazineController@dari_select');
Route::post('dari_mgborrow_insert','magazineController@dari_insert_borrow');
Route::get('dari_mgborrow_insert',function(){
  return view('pages.magazine_dari_borrow_add');
});
Route::get('dari_mag_barrow_edit/{id}','magazineController@dari_edit1');
Route::patch('dari_magazine_barrow_update/{id}','magazineController@dari_update1');

// end of Midleware route
});
