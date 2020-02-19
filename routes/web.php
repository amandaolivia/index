<?php
Route::resource('/siswa', 'SiswaController');
Route::get('/', function(){
    return view('layout.main');
}
);





            
            