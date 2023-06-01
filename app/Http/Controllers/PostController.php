<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('post.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $post = Post::where('id',$id)->first();
        // Get IP
        $post->visit()->withIP();

        //Session
        $post->visit()->withIP()->withSession();

        // Total Count
        $total = Post::withTotalVisitCount()->first()->visit_count_total;

        $today = Carbon::today()->toDateString();
        $hari = DB::table('laravisits')->whereDate('created_at', $today)->count();

        $bulanIni = Carbon::now()->format('m');
        $tahunIni = Carbon::now()->format('Y');

        $bulan = DB::table('laravisits')
            ->whereMonth('created_at', $bulanIni)
            ->whereYear('created_at', $tahunIni)
            ->count();

       return view('post.show', ['post' => $post, 'total' => $total, 'hari' => $hari, 'bulan' => $bulan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function vzt()
    {
        return visits($this);
    }
}
