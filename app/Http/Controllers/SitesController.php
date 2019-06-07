<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;

class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sites = Site::all();
      return view('sites/index')->with('sites', $sites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sites/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'url' => 'required|unique:sites',
        'admin' => 'required',
        'admin_email' => 'required|unique:sites',
        'admin_alternate_email' => 'required|unique:sites|different:admin_email',
        'admin_auth' => 'required',
        'visitor_num' => 'required',
        'price' => 'required'
      ]);

     //  $email1 = $request->input('admin_email');
     //  $email2 = $request->input('admin_alternate_email');
     //
     // if (isset($email1,$email2) && $email1 != $email2) echo 'Your password confirmation is not equal to your password';

      $sites = new Site;
      $sites->url = $request->input('url');
      $sites->admin = $request->input('admin');
      $sites->admin_email = $request->input('admin_email');
      $sites->admin_alternate_email = $request->input('admin_alternate_email');
      $sites->admin_authority = $request->input('admin_auth');
      $sites->visitor_number = $request->input('visitor_num');
      $sites->price = $request->input('price');
      $sites->save();

      return redirect('/sites')->with('success', 'Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $sites = Site::find($id);
      return view('sites/show')->with('sites', $sites);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sites = Site::find($id);
      return view('sites/edit')->with('sites', $sites);
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
      $this->validate($request, [
        'url' => 'required',
        'admin' => 'required',
        'admin_email' => 'required',
        'admin_alternate_email' => 'required',
        'admin_auth' => 'required',
        'visitor_num' => 'required',
        'price' => 'required'
      ]);

      $sites = Site::find($id);
      $sites->url = $request->input('url');
      $sites->admin = $request->input('admin');
      $sites->admin_email = $request->input('admin_email');
      $sites->admin_alternate_email = $request->input('admin_alternate_email');
      $sites->admin_authority = $request->input('admin_auth');
      $sites->visitor_number = $request->input('visitor_num');
      $sites->price = $request->input('price');
      $sites->save();

      // $sites = Post::find($id);

      return redirect()->action('SitesController@show', $sites->id)->with('success' , 'Site updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $sites = Site::find($id);
      $sites->delete();

      return redirect('/sites')->with('success' , 'Site deleted');
    }
}
