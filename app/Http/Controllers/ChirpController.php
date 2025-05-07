<?php
namespace App\Http\Controllers;
use Illuminate\Http\Response;// [tl! remove]
use Illuminate\View\View;// [tl! add]
class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View// [tl! add]
    {
        return view('chirps', [// [tl! add:start]
            //
        ]);// [tl! add:end]
    }
}