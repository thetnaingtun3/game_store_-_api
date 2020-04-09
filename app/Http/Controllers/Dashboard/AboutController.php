<?php

namespace App\Http\Controllers\Dashboard;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $about = About::all();

        return view('dashboard.about.show', compact('about'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
        return view('dashboard.about.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|min:1',
            'description' => 'required|min:1',
            'image' => 'required|mimes:png,jpeg,jpg'

        ]);
        if (request()->has('image')) {
            $image = request()->file('image');
            $image_name = uniqid() . $image->getClientOriginalName();
        } else {
            $image_name = "default.png";
        }
        $post = new About();
        $post->title = request()->title;
        $post->description = request()->description;
        $post->image = $image_name;
        if ($post->save()) {
            $image->move(public_path('gallery/about'), $image_name);
            return redirect(route('about.create'))->with('success', 'Post Create Success');
        }
        return redirect()->back()->with('danger', 'Post Create Fail!!');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('dashboard.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $service = About::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('gallery/about'), $filename);
            $service->image = $request->file('image')->getClientOriginalName();
        }
        $service->title = $request->title;
        $service->description = $request->description;
        $service->update();
        return redirect(route('about.index'))->with('success', 'Post Updated Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        if (About::find($id)->delete()) {
            return redirect()->back()->with("message");
        }
    }
}
