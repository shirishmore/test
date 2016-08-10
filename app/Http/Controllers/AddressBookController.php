<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Addressbook;
use Illuminate\Support\Facades\Session;


class AddressBookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addressbook = Addressbook::all();
        return View::make('addressbook.index')->with('addressbook', $addressbook);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return View::make('addressbook.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address_title' => 'required',
            'contact_name' => 'required',
            'contact_phone' => 'required',
            'city' => 'required',
            'country' => 'required'

        ]);

        if ($validator->fails()) {
            return Redirect::to('addressBook/create')->withErrors($validator)->withInput();
        }

        // store
        $addressbook = new Addressbook;
        $addressbook->address_title = $request->input('address_title');
        $addressbook->contact_name = $request->input('contact_name');
        $addressbook->contact_phone = $request->input('contact_phone');
        $addressbook->address1 = $request->input('address1');
        $addressbook->address2 = $request->input('address2');
        $addressbook->address3 = $request->input('address3');
        $addressbook->pincode = $request->input('pincode');
        $addressbook->city = $request->input('city');
        $addressbook->state = $request->input('state');
        $addressbook->country = $request->input('country');
        //$addressbook->status = 'active';

        $addressbook->save();

        Session::flash('message', 'Addressbook Successfully created!');
        return redirect('addressBook');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $addressbook = Addressbook::findOrFail($id);

        // show the view and pass the addressBook to it
        return View::make('addressBook.show')
            ->with('addressbook', $addressbook);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addressbook = Addressbook::findOrFail($id);
        return view('addressbook.edit', compact('addressbook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [   'address_title' => 'required',
            'contact_name' => 'required',
            'contact_phone' => 'required',
            'city' => 'required',
            'country' => 'required'];

        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('addressBook/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }

        // store
        $addressbook = Addressbook::findOrFail($id);
        $addressbook->address_title = $request->input('address_title');
        $addressbook->contact_name = $request->input('contact_name');
        $addressbook->contact_phone = $request->input('contact_phone');
        $addressbook->address1 = $request->input('address1');
        $addressbook->address2 = $request->input('address2');
        $addressbook->address3 = $request->input('address3');
        $addressbook->pincode = $request->input('pincode');
        $addressbook->city = $request->input('city');
        $addressbook->state = $request->input('state');
        $addressbook->country = $request->input('country');

        $addressbook->save();

        Session::flash('message', 'Addressbook Successfully updated!');
        return redirect('addressbook');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $addressbook = Addressbook::findOrFail($id);
        $addressbook->delete();

        Session::flash('message', 'Addressbook successfully deleted!');
        return Redirect::to('addressbook');
    }


}
