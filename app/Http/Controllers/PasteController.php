<?php

namespace App\Http\Controllers;

use App\Models\Paste;
use Illuminate\Http\Request;

class PasteController extends Controller
{

    public function index(Paste $paste = null)
    {
        return view('index', ['paste' => session('paste') ?: new Paste]);
    }

    public function show(Paste $paste = null)
    {
        if (!$paste->exists) {
            return redirect(route('index'));
        }

        return view('show', ['paste' => $paste]);
    }

    public function create(Request $request)
    {
        $data = $request->input('data');

        $paste = Paste::create([
            'short_url' => Paste::generateShortUrl(),
            'pasted_data' => $data,
        ]);

        return redirect("/{$paste->short_url}");
    }

    public function fork(Paste $paste)
    {
        $new_paste = Paste::create([
            'short_url' => Paste::generateShortUrl(),
            'pasted_data' => $paste->pasted_data,
        ]);

        return redirect(route('index'))->with('paste', $new_paste);
    }
}
