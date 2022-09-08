<?php

namespace App\Http\Controllers;

use App\Models\father;
use Illuminate\Http\Request;

class FatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fathers = father::orderBy('id','desc')->simplePaginate(5);
        return response()->view('cms.father.index' ,compact('fathers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.father.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(),[
            'father_name' => 'required|String|min:3|max:20',
           ]);

           if(!$validator->fails()){
               $fathers= new father();
               $fathers->father_name = $request->get('father_name');
               $fathers->age = $request->get('age');
               $isSaved = $fathers->save();

               if($isSaved){

                   return response()->json(['icon'=>'success' , 'title' => 'created successfully' ] , 200);
               }else {

                   return response()->json(['icon'=>'error' , 'title' => 'created failed' ] , 400);

               };

           } else {

               return response()->json(['icon'=>'error' , 'title'=>$validator->getMessageBag()->first() ] ,400 );
           }
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
        $fathers = father::findorFail($id);
        return response()->view('cms.father.edit',compact('fathers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\father  $father
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all(),[
            'father_name' => 'required|String|min:3|max:20',
            'code' => 'required|String|min:3|max:20',

           ]);

           if(!$validator->fails()){
               $fathers= father::findorFail($id);
               $fathers->father_name = $request->get('father_name');
               $fathers->code = $request->get('code');
               $isUpdated = $fathers->save();

               return ['redirect' => route('f$fathers.index' , $id)];

               if($isUpdated){

                   return response()->json(['icon'=>'success' , 'title' => 'updated successfully' ] , 200);
               }else {

                   return response()->json(['icon'=>'error' , 'title' => 'updated failed' ] , 400);

               };

           } else {

               return response()->json(['icon'=>'error' , 'title'=>$validator->getMessageBag()->first() ] ,400 );
           }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\father  $father
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fathers = father::destroy($id);
        return response()->json(['icon' =>'success' , 'tittle' => 'Deleted successfuly'] , 200 );

    }
}
