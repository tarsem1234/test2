<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\XmlfeedUser;
use Hash;
use Illuminate\Http\Request;

class XmlFeedController extends Controller
{
    public function index()
    {
        $xmlUsers = XmlfeedUser::latest()->get();

        return view('backend.xml_feed.index', ['xmlUsers' => $xmlUsers]);
    }

    public function create()
    {
        return view('backend.xml_feed.create');
    }

    public function edit($id)
    {
        if ($id) {
            $xmlUser = XmlfeedUser::find(decrypt($id));
            if ($xmlUser) {
                return view('backend.xml_feed.create', compact('xmlUser'));
            }
        }

        return redirect()->back()->withFlashDanger('Something went wrong.');
    }

    public function store(Request $request, $id = null)
    {
        $this->validate($request,
            [
                'username' => 'required|unique:xmlfeed_users|max:191',
                'password' => 'required|max:191',
            ]);
        $data = $request->all();
        unset($data['_token']);
        $data['password'] = Hash::make($data['password']);
        //        $user->username = $request->username;
        //        $user->password = bcrypt($request->password);

        if (XmlfeedUser::create($data)) {

            return redirect()->route('admin.xmlFeedIndex')->withFlashSuccess('Xml Feed User Created.');
        }

        return redirect()->back()->withFlashDanger('Something went wrong.');
    }

    public function update(Request $request)
    {
        if ($request->xml_user_id) {
            $this->validate($request,
                [
                    'username' => 'required|max:191',
                    'password' => 'required|max:191',
                ]);
            $xmlUserId = decrypt($request->xml_user_id);
            $data = [
                'username' => $request->username,
                'password' => $request->password,
            ];
            if (XmlfeedUser::where('id', $xmlUserId)->update($data)) {

                return redirect()->route('admin.xmlFeedIndex')->withFlashSuccess('Xml Feed User Updated.');
            }
        }

        return redirect()->back()->withFlashDanger('Something went wrong.');
    }

    public function activation($id)
    {
        if ($id) {
            $xmlUser = XmlfeedUser::find(decrypt($id));
            if ($xmlUser && $xmlUser->status) {
                XmlfeedUser::where('id', $xmlUser->id)->Update(['status' => 0]);
            } elseif ($xmlUser && $xmlUser->status == 0) {
                XmlfeedUser::where('id', $xmlUser->id)->Update(['status' => 1]);
            }

            return redirect()->route('admin.xmlFeedIndex')->withFlashSuccess('Xml Feed User Updated.');
        }

        return redirect()->back()->withFlashDanger('Something went wrong.');
    }

    public function delete($id)
    {
        if ($id) {
            if (XmlfeedUser::find($id)) {
                XmlfeedUser::where('id', $id)->delete();

                return redirect()->route('admin.xmlFeedIndex');
            }
        }

        return redirect()->back()->withFlashDanger('Something went wrong.');
    }
}
