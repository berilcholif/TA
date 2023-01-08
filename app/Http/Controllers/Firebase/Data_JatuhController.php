<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class Data_JatuhController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'data_jatuh';
    }
    public function index()
    {
        $data_jatuh = $this->database->getReference($this->tablename)->getValue();
        return view('firebase.data_jatuh.index', compact('data_jatuh'));
    }
    public function create()
    {
        return view('firebase.data_jatuh.create');
    }
    public function store(Request $request)
    {
        $ref_tablename = 'data_jatuh';
        $postData = [
            'djatuh' => $request->Data_Jatuh,
        ];
        $postRef = $this->database->getReference( $this->tablename)->push($postData);
    if($postRef){
        return redirect('data_jatuh')->with('status', 'data add succes');
    }
    else{
        return redirect('data_jatuh')->with('status', 'data not add succes');
    }
    }
//

}