<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\News;

class MisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mis.dashboard');
    }

    public function users()
    {
        return view('admin.mis.users');
    }

    public function showUserType()
    {
        return view('admin.mis.user-list');
    }

    public function showUserTypeProfile()
    {
        return view('admin.mis.user-profile');
    }

    public function showAnalytics()
    {
        return view('admin.mis.analytics');
    }

    public function messaging()
    {
        return view('admin.mis.messaging');
    }

    public function newsAnnounce()
    {
        return view('admin.mis.news-announcement');
    }

    public function showAr()
    {
        return view('admin.mis.ar-config');
    }

    public function showMapping()
    {
        return view('admin.mis.mapping-config');
    }

    public function postAnnouncement(Request $request)
    {
        $user = Auth::user();
        $news = DB::table('news')->insert([
            ['header' => $request->news_header],
            ['description' => $request->news_description],
            ['creator' => $user->first_name.' '.$user->last_name],
            ['position' => $user->roles[0]->name]
        ]);
        // return $user;
        return $news;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
