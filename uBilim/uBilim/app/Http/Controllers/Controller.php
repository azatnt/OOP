<?php

namespace App\Http\Controllers;

//use http\Client\Curl\User;
use App\Models\uBilimCourses;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\GetCourse;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;




class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get_course(Request $request, $id)
    {
        $product = uBilimCourses::find($id);

//        dd($product);


        $user_id = Auth::id();

        $user = User::find([$user_id]);
        $product->users()->attach($user);
//        $user->u_bilim_courses()->attach($product);

        return redirect()->route('courses');
    }


//    public function removeCourse(uBilimCourses $courses)
//    {
//        $courses = Category::find(3);
//
//        $courses->users()->detach($courses);
//
//        return redirect()->route('courses');
//    }


    public function show()
    {
        $user = Auth::user();
        $name = $user->name;
        $user = uBilimCourses::whereHas('users', function ($query) use ($name) {
            $query->where('name', $name);
        })->get();
        return view('my_courses', ['product' => $user]);
    }
}
