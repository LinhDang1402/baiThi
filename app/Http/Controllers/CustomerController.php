<?php

namespace App\Http\Controllers;
use App\Models\Customer;    
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $search = $request->get('search');
        $listCustomer = Customer::where('name', 'like', "%$search%")->orWhere('numberPhone','like',"%$search%")
        ->paginate(3);
        return view('customers.index',[
            'listCustomer' => $listCustomer,
            'search' => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $gender = $request->get('gender');
        $address = $request->get('address');
        $phone = $request->get('phone');
        $email = $request->get('email');
        // ORM => Eloquent
        $customer = new Customer();
        $customer->name = $name;
        $customer->gender = $gender;
        $customer->address = $address;
        $customer->numberPhone = $phone;
        $customer->email = $email;
        $customer->save();
        return redirect(route('customers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
