<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Cucumber;
use Illuminate\Http\Request;
use DB;

class CucumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index()
    //{
    //  return Cucumber()->json(Cucumber::all());
    //}

    public function index() {
        $cucumbers = Cucumber::all()->random(10);
        $countries = Country::all();
        return view('customer', compact('cucumbers', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $price = $request->input('price');
        $color = $request->input('color');
        $country_id = $request->input('country_id');
        $is_smooth = $request->input('is_smooth');

        $data = array('price'=>$price, 'color'=>$color, 'country_id'=>$country_id, 'is_smooth'=>$is_smooth);

        DB::table('cucumbers')->insert($data);

        echo 'Огурец успешно добавлен';
        echo '<h3>Мне есть что еще положить!<a href="/cucumber_project/public/api/customer">клац</a></h3>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $cucumber = new Cucumber();
//        $cucumber->price = $request->price;
//        $cucumber->color = $request->color;
//        //$cucumber-<country_id = $request->country_id;
//        $cucumber->isSmooth = $request->isSmooth;
//
//        return response($cucumber);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cucumber  $cucumber
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cucumber = Cucumber::find($id);
        //$cucumber =  \App\Models\Cucumber::findOrFail($id);
        return view('cucumber', compact('cucumber'));
//
//        return $post;
//        $cucumber = Cucumber::find($id)->json(Cucumber::all());
//        return view('cucumber', compact('cucumber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cucumber  $cucumber
     * @return \Illuminate\Http\Response
     */
    public function edit(Cucumber $cucumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cucumber  $cucumber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cucumber $cucumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cucumber  $cucumber
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('cucumbers')->where('id', $id)->delete();
        echo 'Вы успешно забрали огурчик';
        echo '<h3>Взглянуть на прилавок еще раз...<a href="/cucumber_project/public/api/customer">клац</a></h3>';
    }

    public function countrows()
    {
        return Cucumber::count();
    }

    public function showcounties()
    {
        $countries = Country::all();
        return view('producer', compact('countries'));
    }

    public function showcucumbersfromcounty($id)
    {
        $cucumbers = Cucumber::where('country_id', $id)->get()->random(10);
//        $cucumbers = DB::table('cucumbers')
//            ->where('country_id', '=', $id)
//            ->get();
        return view('country', compact('cucumbers'));
    }
}