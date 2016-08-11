<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Division;
use App\District;
use App\Category;
use App\Dcategory;
use App\Hospital;
use App\Doctor;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
    public function index(Request $req)
    {

        $divisions = Division::all();
        //return $divisions;
       return view('users.index',['divisions' => $divisions]);

    }
	
	public function home()
	
    {
       return view('users.index');
    }

    public function about_us(Request $req)
    {
        $divisions = Division::all();

        return view('users.about-us',['divisions' => $divisions]);
    }

    

    public function district($id)
    {
        
        $divisions = Division::all();

        $division=Division::find($id); 
        
        $district=District::find($id); 

        // $districts=District::where('division_id', '=', $divisions->id)->get();
        
        if (!$division)
        {
            throw new NotFoundHttpException;
        }
        return view('users.district')
                    ->with('divisions',  $divisions)
                    ->with('division', $division)
                    ->with('district', $district);
    }

    public function districts($id)
    {
        $divisions = Division::all();

        $division=Division::find($id); 
        
        // $districts=District::where('division_id', '=', $divisions->id)->get();
        
        if (!$division)
        {
            throw new NotFoundHttpException;
        }
        return view('users.district2')
                    ->with('divisions',  $divisions)
                    ->with('division', $division);
    }


    public function hospital($id)
    {
        
         $divisions = Division::all();
         $division=Division::find($id); 

         $district=District::find($id); 

         $categories=Category::all();
        
        // $districts=District::where('division_id', '=', $divisions->id)->get();
        
        // if (!$district)
        // {
        //     throw new NotFoundHttpException;
        // }
        return view('users.hospital')
                    ->with('divisions',  $divisions)
                    ->with('division', $division)
                    ->with('district', $district)
                    ->with('categories',$categories);
    }


    public function hospital_info($id)
    {
        $divisions = Division::all();
         $division=Division::find($id); 

         $district=District::find($id); 

         $categories=Category::all();
         $category=Category::find($id);
         $hospitals=Hospital::all();
         $hospital=Hospital::find($id);
        
        // $districts=District::where('division_id', '=', $divisions->id)->get();
        
        // if (!$district)
        // {
        //     throw new NotFoundHttpException;
        // }
        return view('users.hospital_info')
                    ->with('divisions',  $divisions)
                    ->with('division', $division)
                    ->with('district', $district)
                    ->with('categories',$categories)
                    ->with('category',$category)
                    ->with('hospitals',$hospitals)
                    ->with('hospital',$hospital);
    }
    
    public function doctor_list($id)
    {
        $divisions = Division::all();
         $division=Division::find($id); 

         $district=District::find($id); 

         $categories=Category::all();
         $category=Category::find($id);
         $hospitals=Hospital::all();
         $hospital=Hospital::find($id);
        
        // $districts=District::where('division_id', '=', $divisions->id)->get();
        
        // if (!$district)
        // {
        //     throw new NotFoundHttpException;
        // }
        return view('users.doctor_list')
                    ->with('divisions',  $divisions)
                    ->with('division', $division)
                    ->with('district', $district)
                    ->with('categories',$categories)
                    ->with('category',$category)
                    ->with('hospitals',$hospitals)
                    ->with('hospital',$hospital);
    }
    public function doctor($id)
    {
        
        $divisions = Division::all();

        $division=Division::find($id);
        $district=District::find($id); 

        $dcategories=Dcategory::all(); 
        
        // $districts=District::where('division_id', '=', $divisions->id)->get();
        
        // if (!$division)
        // {
        //     throw new NotFoundHttpException;
        // }
        return view('users.doctor')
                    ->with('divisions',  $divisions)
                    ->with('division', $division)
                    ->with('district', $district)
                    ->with('dcategories',$dcategories);
    }

    public function doctor_info($id)
    {
         $divisions = Division::all();
         $division=Division::find($id); 

         $district=District::find($id); 

         $dcategories=Dcategory::all();
         $dcategory=Dcategory::find($id);
         $doctors=Doctor::all();
         $doctor=Doctor::find($id);
        
        // $districts=District::where('division_id', '=', $divisions->id)->get();
        
        // if (!$district)
        // {
        //     throw new NotFoundHttpException;
        // }
        return view('users.doctor_info')
                    ->with('divisions',  $divisions)
                    ->with('division', $division)
                    ->with('district', $district)
                    ->with('dcategories',$dcategories)
                    ->with('dcategory',$dcategory)
                    ->with('doctors',$doctors)
                    ->with('doctor',$doctor);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
