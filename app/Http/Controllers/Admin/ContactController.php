<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Nexmo\Message\Message;

class ContactController extends Controller
{
    public function message(){
        $message = Contact::all();
        return view('admin.message.index',compact('message'));
    }
    public function View($id){
        $message = Contact::find($id);
        return view('admin.message.view-message',compact('message'));
    }
    public function deleteMessage($id){
        $message = Contact::find($id);
        $message->delete();
        return Redirect::to('/admin/message')->with('Message','Message Deleted Successfully');
    }
}
