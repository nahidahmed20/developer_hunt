<?php

namespace App\Http\Controllers;

use App\Models\Admin\FrontMenu;
use Illuminate\Http\Request;

class FrontMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frnot_menus = FrontMenu::all();
        return view('admin.front_menu.show',compact('frnot_menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.front_menu.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FrontMenu::addFrontMenu($request);
        return redirect()->route('front-menu.index')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(FrontMenu $frontMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $single_fornt_menu = FrontMenu::where('id', $id)->first();
        return view('admin.front_menu.edit',compact('single_fornt_menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        FrontMenu::updateFrontMenu($request, $id);
        return redirect()->route('front-menu.index')->with('success', 'Post created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        FrontMenu::deleteFrontMenu($id);
        return redirect()->route('front-menu.index')->with('success', 'Post created successfully!');
    }
}
