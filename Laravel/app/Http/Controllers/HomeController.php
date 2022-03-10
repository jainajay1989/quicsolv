<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
 
class HomeController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $countries = \App\Models\Country::pluck('country_name','id');
        return view('Home.index')->with('countries',$countries);
    }
    
    public function store(Request $request) {
        
        try{
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'email|max:255'
            ]);
            
//            echo '<pre>';
//            print_r($validator->errors());exit;
            
            if ($validator->fails()) {
                return redirect('/home')
                        ->withErrors($validator)
                        ->withInput();
            }       

            
            $file = $request->file('profile_picture');
            $path = $file->storeAs('public/uploads', 'filename.jpg'); // This stores the image on storage/app/images folder
            
            $destinationPath = 'puploads';
            $file->move($destinationPath,$file->getClientOriginalName()); // This stores the image on public/uploads folder

//            Storage::put('file.jpg', $file);
            $path = $request->file('profile_picture')->store('public/image');


            exit;
            DB::beginTransaction();
            $user = new \App\Models\User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = $request->password;
            $user->save();
           
            
//            Storage::put('file.jpg', $contents);

            $userDetail = new \App\Models\UserDetail();
            $userDetail->user_id = $user->id;
            $userDetail->age = $request->age;
            $userDetail->address = $request->adress;
            $userDetail->city = $request->city;
            $userDetail->state = $request->state;
            $userDetail->country = $request->country;
            $userDetail->pincode = $request->pincode;
            $userDetail->save();
            DB::commit();
        } catch (Exception $ex) {;
            DB::rollBack();
        }
    }
}