<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactsList;

class ContactsController extends Controller
{
    //all contacts
    public function index()
    {
        $contacts = ContactsList::all();
        return view('pages.contacts.index',['contacts' => $contacts]);
    }
    //add contacts
    public function create()
    {
        return view('pages.contacts.create');
    }
}
