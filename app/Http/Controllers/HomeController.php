<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('home', compact('contacts'));
    }
    public function create()
    {
        return view('create_contact');
    }
    public function store_contact(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);


        $contact = new Contact;
        $contact->name = $request->nombre;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->adress = $request->address;
        $contact->added_by = Auth::user()->name;

        $contact->save();

       return redirect()->route('home')->with('success', 'Contacto agregado exitosamente.');

    }

    public function edit_contact($id)
    {
        $contact = Contact::find($id);
        return view('edit_contact', compact('contact'));
    }
    public function update_contact(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        $contact = Contact::find($request->id);
        $contact->name = $request->nombre;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->adress = $request->address;
        $contact->added_by = Auth::user()->name;
        $contact->save();

       return redirect()->route('home')->with('success', 'Contacto Editado exitosamente.');

    }

    public function delete_contact(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->delete();
        return redirect()->route('home')->with('success', 'Contacto Eliminado exitosamente.');
    }
}
