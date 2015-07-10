<?php

namespace App\Http\Controllers\Admin;

use Auth;

use App\Business;
use App\Http\Requests;
use App\Http\Requests\BusinessRequest;
use App\Http\Controllers\Controller;

class BusinessesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $businesses = Business::all();

        return view('admin.businesses.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.businesses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(BusinessRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $file = $request->file('logo');
            $photoname = uniqid();
            $file->move(public_path() . '/images/business-logos', $photoname . '.' . $file->guessClientExtension());
            $input['logo'] = '/images/business-logos/' . $photoname . '.' . $file->guessClientExtension();
        }

        $business = new Business($input);
        Auth::user()->businesses()->save($business);

        return redirect('admin/businesses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $business = Business::findOrFail($id);

        return view('admin.businesses.show', compact('business'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $business = Business::findOrFail($id);

        return view('admin.businesses.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, BusinessRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $file = $request->file('logo');
            $photoname = uniqid();
            $file->move(public_path() . '/images/business-logos', $photoname . '.' . $file->guessClientExtension());
            $input['logo'] = '/images/business-logos/' . $photoname . '.' . $file->guessClientExtension();
        }

        $business = Business::findOrFail($id);
        $business->update($input);

        return redirect('admin/businesses/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Business::destroy($id);

        return redirect('admin/businesses');
    }
}
