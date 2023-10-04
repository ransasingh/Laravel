<?php

namespace App\Http\Controllers;

use App\Models\Notice_board;
use Illuminate\Http\Request;
use DB;

class NoticeBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Allusers');
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
     * @param  \App\Models\Notice_board  $notice_board
     * @return \Illuminate\Http\Response
     */
    public function show(Notice_board $notice_board)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice_board  $notice_board
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice_board $notice_board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice_board  $notice_board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice_board $notice_board)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice_board  $notice_board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice_board $notice_board)
    {
        //
    }
    public function logout() {
       
        return redirect('/login');
      }
}
