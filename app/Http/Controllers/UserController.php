<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('admin.users.show', compact('user'));
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

    public function change_type(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->status = $request->status;
        $user->update();
        Alert::success('Success', 'User Status Changed Successfully');
        return back();
    }

    public function add_btc(Request $request, $id)
    {
        $wallet = UserWallet::where('user_id', $id)->first();
        $curr = $wallet->btc;
        $wallet->btc = $curr + $request->addBtc;
        $wallet->update();
        Alert::success('Success', 'BTC Added successfully');
        return back();
    }

    public function deduct_btc(Request $request, $id)
    {
        $wallet = UserWallet::where('user_id', $id)->first();
        $curr = $wallet->btc;
        if ($curr < $request->deductBtc) {
            Alert::error('Oops!', 'Deduct amount can\'t be greater than current balance');
            return back();
        }
        $wallet->btc = $curr - $request->deductBtc;
        $wallet->update();
        Alert::success('Success', 'BTC Deducted successfully');
        return back();
    }

    public function add_usdt(Request $request, $id)
    {
        $wallet = UserWallet::where('user_id', $id)->first();
        $curr = $wallet->usdt;
        $wallet->usdt = $curr + $request->addUsdt;
        $wallet->update();
        Alert::success('Success', 'USDT Added successfully');
        return back();
    }

    public function deduct_usdt(Request $request, $id)
    {
        $wallet = UserWallet::where('user_id', $id)->first();
        $curr = $wallet->usdt;
        if ($curr < $request->deductUsdt) {
            Alert::error('Oops!', 'Deduct amount can\'t be greater than current balance');
            return back();
        }
        $wallet->usdt = $curr - $request->deductUsdt;
        $wallet->update();
        Alert::success('Success', 'USDT Deducted successfully');
        return back();
    }

    public function add_eth(Request $request, $id)
    {
        $wallet = UserWallet::where('user_id', $id)->first();
        $curr = $wallet->eth;
        $wallet->eth = $curr + $request->addEth;
        $wallet->update();
        Alert::success('Success', 'Ethereum Added successfully');
        return back();
    }

    public function deduct_eth(Request $request, $id)
    {
        $wallet = UserWallet::where('user_id', $id)->first();
        $curr = $wallet->eth;
        if ($curr < $request->deductEth) {
            Alert::error('Oops!', 'Deduct amount can\'t be greater than current balance');
            return back();
        }
        $wallet->eth = $curr - $request->deductEth;
        $wallet->update();
        Alert::success('Success', 'Ethereum Deducted successfully');
        return back();
    }
    
    public function add_naira(Request $request, $id)
    {
        $wallet = UserWallet::where('user_id', $id)->first();
        $curr = $wallet->naira;
        $wallet->naira = $curr + $request->addNaira;
        $wallet->update();
        Alert::success('Success', 'Naira Added successfully');
        return back();
    }

    public function deduct_naira(Request $request, $id)
    {
        $wallet = UserWallet::where('user_id', $id)->first();
        $curr = $wallet->naira;
        if ($curr < $request->deductNaira) {
            Alert::error('Oops!', 'Deduct amount can\'t be greater than current balance');
            return back();
        }
        $wallet->naira = $curr - $request->deductNaira;
        $wallet->update();
        Alert::success('Success', 'Naira Deducted successfully');
        return back();
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
