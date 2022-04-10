<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\User;
use App\createEvent;
use Auth;
use Illuminate\Support\Str;

class EventEventController extends Controller
{
    public function getList()
    {
        $events = createEvent::all();
        $data = [
            'events' => $events
        ];
        return view('admin/event/list', $data);
    }

    public function getAdd()
    {
        $categoryList = DB::table("categories")->get();
        $data = ['categoryList' => $categoryList];
        return view("admin/event/add", $data);
    }

    public function postAdd(Request $request)
    {
        $validateRules = [
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'name' => 'required|min:6',
            'content' => 'required',
            'status' => 'required',
            'category_id' => 'required',
            'amount' => 'required|numeric',
            'time' => 'required',
            'address' => 'required',
        ];
        $validator = Validator::make($request->all(), $validateRules);
        if ($validator->fails()) {
            return redirect()->route("admin.event.add")->withErrors($validator)->withInput();
        }
        $fileName = auth()->id() . '_' . time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('file'), $fileName);
        $auth = $request->session()->get('auth');
        $data = [
            'name_event' => $request->input('name'),
            'content' => $request->input('content'),
            'status' => $request->input('status'),
            'category_id' => $request->input('category_id'),
            'amount' => $request->input('amount'),
            'user_id' => $auth->id,
            'time' => $request->time,
            'address' => $request->address,
            'image' => $fileName,
        ];

        DB::table('event')->insert($data);
        return redirect()->route('admin.event.add')->with('success', 'Tạo sự kiện thành công.');
    }

    public function getEdit($id)
    {
        $listCategory = DB::table('categories')->get();
        $event = DB::table("event")->where('id', '=', $id)->first();
        $data = ['event' => $event, 'listCategory' => $listCategory];
        return view("admin/event/edit", $data);
    }

    public function postEdit(Request $request, $id)
    {
        $validateRules = [
            'name' => 'required|min:6',
            'content' => 'required',
            'status' => 'required',
            'category_id' => 'required',
            'amount' => 'required|numeric',
            'time' => 'required',
            'address' => 'required',
        ];
        $validator = Validator::make($request->all(), $validateRules);
        if ($validator->fails()) {
            return redirect()->route("admin.event.edit", ['id' => $id])->withErrors($validator)->withInput();
        }
        $auth = $request->session()->get('auth');
        if ($request->has('image') && $request->file('image')) {
            $event = DB::table('event')->where('id', $id)->limit(1);
            $fileName = auth()->id() . '_' . time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('file'), $fileName);
            $event->update([
                'name_event' => $request->input('name'),
                'content' => $request->input('content'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category_id'),
                'amount' => $request->input('amount'),
                'user_id' => $auth->id,
                'time' => $request->time,
                'address' => $request->address,
                'image' => $fileName,
            ]);
            return redirect()->route('admin.event.edit', ['id' => $id])->with('success', 'Cập nhật sự kiện thành công.');
        } else {
            $event = DB::table('event')->where('id', $id)->limit(1);
            $event->update([
                'name_event' => $request->input('name'),
                'content' => $request->input('content'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category_id'),
                'amount' => $request->input('amount'),
                'user_id' => $auth->id,
                'time' => $request->time,
                'address' => $request->address,
            ]);
            return redirect()->route('admin.event.edit', ['id' => $id])->with('success', 'Cập nhật sự kiện thành công.');
        }
    }

    public function getDelete($id)
    {
        DB::table('event')->where('id', $id)->delete();
        return redirect()->route('admin.event')->with('success', 'Xóa sự kiện thành công.');
    }

    public function getEvent()
    {
        return view('event.view-event');
    }

    public function getEventDetail($id)
    {
        $event = DB::table('event')->where('id', $id)->first();
        $data = [
            'event' => $event
        ];
        return view('event.view-event', $data);
    }

    public function postEventDetail(Request $request, $id)
    {
        $event = DB::table('event')->where('id', $id)->first();
        if ($event->amount == 0) {
            return redirect()->back()->with('error', 'Đã hết vé.');
        }
        if (DB::table('ticket')->where('user_id', 1)->exists()) {
            return redirect()->back()->with('error', 'Bạn đã đăng ký sự kiện này rồi');
        }
        DB::table('event')
            ->where('id', $id)
            ->update([
                'member' => DB::raw('member + 1'),
            ]);
        DB::table('event')
            ->where('id', $id)
            ->update([
                'amount' => DB::raw('amount - 1'),
            ]);
        $data = [
            'code' => Str::random(10),
            'user_id' => Auth::user()->id,
            'event_id' => $event->id
        ];
        DB::table('ticket')->insert($data);
        return redirect()->back()->with('success', 'Tham gia sự kiện thành công.');
    }

    public function getRankingEvent()
    {
        $event_favourite = DB::table('event')->orderBy('member', 'DESC')->take(3)->get();
    }

    public function getEventCategoty($id)
    {
        $event = DB::table('event')->join('categories', 'event.category_id', '=', 'categories.id')->where('category_id', $id)->get();
        // dd($event);
        // if($event->name)
        return view('event.view-list-event', ['event' => $event]);
    }

    public function deleteEventUser($id)
    {
        $event = DB::table('event')->where('user_id', Auth::user())->orWhere('id', $id)->delete();
        if (!$event) {
            return redirect()->back()->with('error', 'Thông tin sự kiện không tồn tại.');
        }
        return redirect()->route('/home/profile')->with('success', 'Xoá sự kiện thành công.');
    }

    public function editEventUser($id)
    {
        $user = Auth::user();
        $list_event_participation = DB::table('event')->join('ticket', 'event.id', '=', 'ticket.event_id')->where('ticket.user_id', Auth::user()->id)->get();
        $event = DB::table('event')->where('user_id', Auth::user()->id)->get();
        // dd($event);
        $user_event = DB::table('event')->where('user_id', Auth::user())->orWhere('id', $id)->first();
        $listCategory = DB::table('categories')->get();
        if (!$user_event) {
            return redirect()->back()->with('error', 'Thông tin sự kiện không tồn tại.');
        }
        $data = [
            'event' => $event,
            'user' => $user,
            'list_event_participation' => $list_event_participation,
            'user_event' => $user_event,
            'listCategory' => $listCategory,
        ];
        return view('event.edit', $data);
    }

    public function putEventUser(Request $request, $id)
    {
        $validateRules = [
            'name' => 'required|min:6',
            'content' => 'required',
            // 'status' => 'required',
            'category_id' => 'required',
            'amount' => 'required|numeric',
            'time' => 'required',
            'address' => 'required',
        ];
        $validator = Validator::make($request->all(), $validateRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->has('image') && $request->file('image')) {
            $user_event = DB::table('event')->where('user_id', Auth::user())->orWhere('id', $id)->limit(1);
            $user_event->update([
                'name_event' => $request->name,
                'content' => $request->content,
                'user_id' => Auth::user()->id,
                'amount' => $request->amount,
                'time' => $request->time,
                'category_id' => $request->category_id,
                'address' => $request->address,
                'member' => 0,
                'image' => $request->image
            ]);
            return redirect()->route('/home/profile')->with('success', 'Cập nhật sự kiện thành công.');
        } else {
            $user_event = DB::table('event')->where('user_id', Auth::user())->orWhere('id', $id)->limit(1);
            $user_event->update([
                'name_event' => $request->name,
                'content' => $request->content,
                'user_id' => Auth::user()->id,
                'amount' => $request->amount,
                'time' => $request->time,
                'category_id' => $request->category_id,
                'address' => $request->address,
                'member' => 0,
                // 'image' => $request->image
            ]);
            return redirect()->route('/home/profile')->with('success', 'Cập nhật sự kiện thành công.');
        }
    }
}
