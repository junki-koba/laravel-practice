<?php

use Illuminate\Support\Facades\Route;
use App\Models\Inquiry;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['name' => '田中']);
});


Route::get('/inquiries/create', function () {
    return view('inquiries_form');
});

// 登録処理用
Route::post('/inquiries', function (\Illuminate\Http\Request $request) {
    Inquiry::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'message' => $request->input('message'),
    ]);

    return redirect('/inquiries');
});

Route::post('/inquiries/{id}/delete', function ($id) {
    Inquiry::destroy($id);
    return redirect('/inquiries');
});

Route::get('/inquiries', function (\Illuminate\Http\Request $request) {
    $keyword = $request->query('keyword', '');

    if ($keyword !== '') {
        $inquiries = Inquiry::where('name', 'like', '%' . $keyword . '%')->get();
    } else {
        $inquiries = Inquiry::all();
    }

    return view('inquiries', ['inquiries' => $inquiries, 'keyword' => $keyword]);
});