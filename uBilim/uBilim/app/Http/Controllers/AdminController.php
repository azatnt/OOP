<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Course;

use App\Models\uBilimCourses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Image;

class AdminController extends Controller
{
    function index(){
        $course = new Course();
        return view('admin', ['course' => $course->orderBy('id', 'desc')->get()]);
    }

    function create_course(Request $request){
        $course = new Course();
        $request->validate([
            'name' => 'required',
            'description'=>'required',
            'amount'=>'required',
            'image' =>'required|image|max:2048'
        ]);

//        $image_file = $request->image;
//
//        $image = Image::make($image_file);
//
//        Response::make($image->encode('jpeg'));

//        $form_data = array(
//          'name' => $request->name,
//          'description'=>$request->description,
//            'amount'=>$request->amount,
//            'image'=>$image
//        );
//
//        Course::create($form_data);

        $course ->name = request('name');
        $course ->description = request('description');
        $course ->amount = request('amount');
//        $course ->image = request('image');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);

//see above line.. path is set.(uploads/appsetting/..)->which goes to public->then create
//a folder->upload and appsetting, and it wil store the images in your file.

            $course->image = $filename;
        } else {
            return $request;
            $course->image = '';
        }

        $course ->save();

//        return redirect()->back->with('success', 'Course created successfully');
        return redirect('admin');
    }


    function fetch_image($image_id){
        $image = Course::find($image_id);

        $image_file = Image::make($image->image);
        $response = Response::make($image_file->encode('jpeg'));

        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }


    public function edit($id){
        $data = Course::find($id);
        return view('course_update', ['data' => $data]);
    }


    public function update(Request $request, $id){
        $course = Course::find($id);
        $course->name = request('name');
        $course->description = request('description');
        $course->amount = request('amount');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);
            $course->image = $filename;
        }

        $course->save();

        return redirect('admin');
    }


    public function delete($id){
        Course::find($id)->delete();

        return redirect('/admin');
    }



    public function customer_course(){
        $course = new Course();
        return view('blog', ['row' => $course->orderBy('id', 'desc')->get()]);
    }


    public function admin_courses(){
        $course = new uBilimCourses();
        return view('admin_course', ['row' => $course->orderBy('id', 'desc')->get()]);
    }


    function add_course(Request $request){
        $course = new uBilimCourses();
        $request->validate([
            'name' => 'required',
            'description'=>'required',
            'price'=>'required',
            'image' =>'required'
        ]);



        $course ->name = request('name');
        $course ->description = request('description');
        $course ->price = request('price');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);


            $course->image = $filename;
        } else {
            return $request;
            $course->image = '';
        }

        if ($request->hasfile('video')) {
            $file = $request->file('video');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);


            $course->video = $filename;
        } else {
            return $request;
            $course->video = '';
        }

        $course ->save();

        return redirect('admin_courses');
    }


    public function edit_course($id){
        $data = uBilimCourses::find($id);
        return view('courses_update', ['data' => $data]);
    }


    public function update_course(Request $request, $id){
        $course = uBilimCourses::find($id);
        $course->name = request('name');
        $course->description = request('description');
        $course->price = request('price');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);
            $course->image = $filename;
        }
        if($request->hasFile('video')){
            $file = $request->file('video');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);
            $course->video = $filename;
        }

        $course->save();

        return redirect('admin_courses');
    }


    public function delete_course($id){
        uBilimCourses::find($id)->delete();

        return redirect('/admin_courses');
    }


    public function customer_courses(){
        $course = new uBilimCourses();
        return view('courses', ['row' => $course->orderBy('id', 'desc')->get()]);
    }

    public function submit(){
//        dd($req);
        $contact = new Contact();
        $contact ->name = request('name');
        $contact ->email = request('email');
        $contact ->subject = request('subject');
        $contact ->message = request('message');

        $contact ->save();

        return redirect('/contact');
    }


    public function get_contacts(){
        $contact = Contact::all();

        return view('admin_contact', compact('contact', $contact));

    }

    public function delete_contact($id){
        Contact::find($id)->delete();

        return redirect()->route('get_contacts');
    }


    public function open_course($id){
        $course = uBilimCourses::find($id);

        return view('course_detail', compact('course', $course));
    }

}


