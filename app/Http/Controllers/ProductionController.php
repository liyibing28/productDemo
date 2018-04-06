<?php

namespace App\Http\Controllers;


use App\Production;
use Auth;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if($user['role'] == 0)
        {
            return view('production.create');
        }

        return back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'kebian' =>  $request->get('kebian'),
            'xiadanshijian' => $request->get('orderTime'),
            'jihuajiaoqi' => $request->get('planedTime'),
            'guige' => $request->get('specification'),
            'xinghao' => $request->get('model'),
            ];

        $production = Production::create($data);
        return redirect()->route('production.show',[$production->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$production = Production::find($id);

        if (Auth::check()) {
            $productions = Production::where('is_finished','=', false)->get();
            $user = Auth::user();
            if($user['role'] == 1 || $user['role'] == 0)
            {
                return view('production.show',compact('productions'));
            }
            else if($user['role'] == 2){
                return view('production.out_show',compact('productions'));
            }
        }
        else{
            return view('auth.login');
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $production = Production::find($id);
        $user = Auth::user();
        if($user['role'] == 1)
        {
            return view('production.edit',compact('production'));
        }
        else if($user['role'] == 2){
            return view('production.out_edit',compact('production'));
        }
        else if($user['role'] == 0){
            return view('production.admin_edit',compact('production'));
        }

        return back();
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
        $production = Production::find($id);
        $user = Auth::user();

        //dd($request);
        if($user['role'] == 1 || $user['role'] == 0)
        {
            $production->update([
                'kaidaoyi' => $request->get('kaidaoyi'),
                'kaidaoyi_renyuan' => $request->get('kaidaoyi_renyuan'),
                'kaidaoyi_banci' => $request->get('kaidaoyi_banci'),

                'kaiding' => $request->get('kaiding'),
                'kaiding_renyuan' => $request->get('kaiding_renyuan'),
                'kaiding_banci' => $request->get('kaiding_banci'),

                'zuankong' => $request->get('zuankong'),
                'zuankong_renyuan' => $request->get('zuankong_renyuan'),
                'zuankong_banci' => $request->get('zuankong_banci'),


            ]);
        }
        if($user['role'] == 2){
            $production->update([
                'cuche' => $request->get('cuche'),
                'cuche_type' => $request->get('cuche_renyuan'),
                'rechuli' => $request->get('rechuli'),
                'jingche' => $request->get('jingche'),
            ]);
        }
        if($user['role'] == 0){
            $production->update([
                'kebian' =>  $request->get('kebian'),
                'xiadanshijian' => $request->get('xiadanshijian'),
                'jihuajiaoqi' => $request->get('jihuajiaoqi'),
                'guige' => $request->get('guige'),
                'xinghao' => $request->get('xinghao'),
                'cuche' => $request->get('cuche'),
                'cuche_type' => $request->get('cuche_renyuan'),
                'rechuli' => $request->get('rechuli'),
                'jingche' => $request->get('jingche'),
            ]);
        }
        return redirect()->route('production.show',[$production->id]);

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

    public function getOutShow(){
        $user = Auth::user();
        if($user['role'] == 2){
            $productions = Production::where('is_finished','=', false)->get();
            return view('production.out_show',compact('productions'));
        }

        return back();
    }

}
