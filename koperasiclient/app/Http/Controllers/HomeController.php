<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getAPI()
    {
        $client = new Client(['base_uri' => 'http://localhost/koperasi/api/BarangAPI']);
        $response = $client->request('GET', '');
        $result = json_decode($response->getBody()->getContents(), true);
        return view('anggota', ['anggota' => $result['data']]);
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('edit', ['user' => $user]);
    }
    public function update(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->namamhs,
            'email' => $request->emailmhs
        ]);
        return redirect('/user');
    }
    public function hapus($id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect('/user');
    }
}
