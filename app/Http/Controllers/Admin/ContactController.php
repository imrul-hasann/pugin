<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;

class ContactController
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        $data = [
          'contacts' => $contacts,
          'title'    => 'Contacts'
        ];
        return view('admin.contacts.index', $data);
    }

    public function destroy($id)
    {
        $subs = Contact::find($id);
        $subs->delete();
        Session::flash('success', 'Contacts Deleted successfully!');
        return redirect()->back();
    }
}
