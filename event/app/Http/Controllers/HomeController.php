<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $event_hot = DB::table('event')->where('status', 1)->take(6)->orderBy('id', 'DESC')->get();
        $event_favourite = DB::table('event')->orderBy('member', 'DESC')->where('status', 1)->take(3)->get();
        $data = [
            'event_hot' => $event_hot,
            'event_favourite' => $event_favourite,
        ];
        return view('home', $data);
    }

    public function userProfile(){
        // $user_event = DB::table('event')->where('user_id', Auth::user())->orWhere('id', $id)->first();
        // if(!$user_event) {
        //     return redirect()->back()->with('alert_error', 'Thông tin sự kiện không tồn tại.');
        // }
        $user = Auth::user();
        $list_event_participation = DB::table('event')->join('ticket', 'event.id', '=', 'ticket.event_id')->where('ticket.user_id', Auth::user()->id)->get();
        $event = DB::table('event')->where('user_id', Auth::user()->id)->get();
        $categoryList = DB::table('categories')->get();
        $data = [
            'event' => $event,
            'user' => $user,
            'list_event_participation' => $list_event_participation,
            'categoryList' => $categoryList,
        ];
        return view('users.profile', $data);
    }
    
}
