<?php

namespace App\Http\Controllers;

use id;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public function show()
    {
        $members = DB::table('members')->get();
        return view('home', ['members' => $members]);
    }
    public function create()
    {
        return view('add');
    }
    public function store(Request $request)
    {
        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->address = $request->address;
        $member->save();

        return redirect()->route('home');
    }

    public function edit($id){
        $member= Member::find($id);
        return view('edit', ['member' => $member]);
    }

    public function update($id ,Request $request){
        $member= Member::find($id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->address = $request->address;
        $member->save();
        return redirect()->route('home');
    }
    
    public function delete($id, Request $request){
        $member = Member::find($id);
        $member->delete();
        return redirect()->route('home');
    }
}
