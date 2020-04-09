<?php

namespace App\Http\Controllers\Dashboard;

use App\About;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('dashboard.team.show',compact('team'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:3',
            'about' => 'required|min:3',
            'fb_linnk'=>'min:3',
            'tw_linnk'=>'min:3',
            'gg_linnk'=>'min:3',
            'image' => 'required|mimes:png,jpeg,jpg'

        ]);
        if (request()->has('image')) {
            $image = request()->file('image');
            $image_name = uniqid() . $image->getClientOriginalName();
        } else {
            $image_name = "default.png";
        }
        $post = new Team();
        $post->name = request()->name;
        $post->about = request()->about;
        $post->fb_link = request()->fb_link;
        $post->tw_link = request()->tw_link;
        $post->gg_link = request()->gg_link;
        $post->image = $image_name;
        if ($post->save()) {
            $image->move(public_path('gallery/team'), $image_name);
            return redirect(route('team.create'))->with('success','Post Create Success');
        }
        return redirect()->back()->with('danger', 'Post Create Fail!!');
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Team::find($id);

        return view('dashboard.team.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Team::find($id);
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $imag_name = uniqid() . $image->getClientOriginalName();
            $image->move(public_path('gallery/team'), $imag_name);
        } else {
            $imag_name = $post->image;
        }
        $post->name = $request->name;
        $post->about = $request->about;
        $post->fb_link = request()->fb_link;
        $post->tw_link = request()->tw_link;
        $post->gg_link = request()->gg_link;
        $post->image = $imag_name;
        if ($post->save()) {
            return redirect(route('team.index'))->with('success', 'Post Updated Success');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */



    public function destroy($id)
    {
        if (Team::find($id)->delete()) {
            return redirect()->back()->with('success', 'Category Delete Success');
        }
    }

}
