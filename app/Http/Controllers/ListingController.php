<?php

namespace App\Http\Controllers;

use Auth;
use App\Product;
use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View::make('pages.listing')->with([
            'listings' => Listing::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: add validate function
        // Create listing entity
        $listing = new Listing;
        $listing->end_date = $request->end_date;
        $listing->user()->associate(Auth::user());
        $listing->save();

        // Create product entity
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->start_price = $request->start_price;
        $product->reserve_price = $request->reserve_price;
        $product->buy_now_price = $request->buy_now;
        $product->save();

        $listing->product()->save($product);
        return redirect()->to('listing');
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
