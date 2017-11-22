<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
// use App\Http\Requests\Request;
// use App\Http\Requests\Interet;
use App\Http\Controllers\Controller;
use App\Song;
use App\Interet;
class CentreInteretController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        $interet = new Interet();
        $interet->Interet = $request->q_answer; // récupere la valeur du input
        $interet->user_interet_id = auth()->user()->id;   // je récupere l'id de l'utilisateur 
        // $dataInput=Input::all();
        // echo $_POST['q_answer'];
        // dump($dataInput);
        $interet->save();
        return view('Accueil');
    }
 
    // public function create(array $data)
    // {
    //     return Interets::create([
    //         'interets' => $data['q_answer'],
    //     ]);
    // }
}
