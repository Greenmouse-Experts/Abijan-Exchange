<?php

namespace App\Http\Controllers;

use App\Models\USDTTrans;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use Hash;

class USDTTransController extends Controller
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
        $usdt_wallet = $request->usdt_wallet;
        $bit_amount =  $request->bit_amount;
        $transfee_btc =  $request->transfee_btc;
        $fee_method_btc = $request->fee_method_btc;
        $send_pass = $request->send_pass;
        $user_id = Auth::user()->id;
        $btc_bal =  Auth::user()->wallet->usdt;
        $btc_fee =  settings()->eth_trans_fee;
        $new_ammount = $bit_amount + $btc_fee;

        if(!Hash::check($request->send_pass, Auth::user()->password)){
            //Alert::error('Error', 'Your Password is incorrect!');
            return response()->json(['error'=>"Your Password is incorrect!", 'status'=>"password_error"]);
        }
        else if ($new_ammount < $bit_amount) {
            return response()->json(['error'=>"You have enough in your USDT wallet balance to complete this transaction!, please fund your USDT wallet",
                'status'=>"balance_error"]);
        }
        else{
            $wallet = UserWallet::where('user_id', Auth::user()->id)->first();
            $bal = $wallet->usdt;
            //dd($wallet->usdt - $new_ammount);
            $wallet->usdt = $wallet->usdt - $new_ammount;
            $wallet->update();
            $trns = new USDTTrans();
            $trns->trf_wallet = $usdt_wallet;
            $trns->btc_amount =  $request->bit_amount;
            $trns->transfer_fee =  $btc_fee;
            $trns->user_id = Auth::user()->id;
            $trns->fee_method = $request->fee_method_btc;
            $trns->save();
            return response()->json(['success'=>"Your Transaction is Pending! Please wait for admin to verify", 'status'=>"success"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\USDTTrans  $uSDTTrans
     * @return \Illuminate\Http\Response
     */
    public function show(USDTTrans $uSDTTrans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\USDTTrans  $uSDTTrans
     * @return \Illuminate\Http\Response
     */
    public function edit(USDTTrans $uSDTTrans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\USDTTrans  $uSDTTrans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, USDTTrans $uSDTTrans)
    {
        //
    }

    public function usdtNaira(Request $request)
    {
        USDTTrans::findOrFail($request->id)->update(["status"=>1]);
        Alert::success('Success', 'Your Approved Transaction!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\USDTTrans  $uSDTTrans
     * @return \Illuminate\Http\Response
     */
    public function destroy(USDTTrans $uSDTTrans)
    {
        //
    }
}
