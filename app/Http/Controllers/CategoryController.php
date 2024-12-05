<?php

namespace App\Http\Controllers;
use \App\Models\Category;
use \App\Models\Event;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $events = Event::all();
        return view('login.category', compact('categories', 'events'));
    }

    public function add_category(Request $request) {
        // try{
        $request->validate( [
            'category_name' => 'required|string|max:255',
            'category_description' => 'required|string|max:255'
        ]);

        Event::create([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
        ]);



        return redirect()->route('admin.category')->with('success','Na add na ang event!');
    //    } catch(\Exception $e){
    //         return redirect()->route('admin.main-dashboard')
    //                 ->with('error', 'Event exist!');
    //     }
    }

    public function update_category(Request $request, $id) {

        $category = Event::findOrFail($id);

        // dd($event);

        try{
        $request->validate( [
            'category_name' => 'required|string|max:255',
            'category_description' => 'required|string|max:255'
        ]);

        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->save();

        return redirect()->route('admin.category')
                            ->with('success','Wa gihapon ko kasabot ug giunsa ni!');

       } catch(\Exception $e){

            return redirect()->route('admin.category')
                    ->with('error', 'Event exist!');
        }
    }

    public function delete_category(Request $request, $id) {
        $category = Event::findOrFail($id);
        $category->delete();
        return  redirect()->route('admin.category')
                        ->with('success','Event deleted');
    }
}
