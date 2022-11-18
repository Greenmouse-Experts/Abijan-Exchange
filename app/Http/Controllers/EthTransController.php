<?php

namespace App\Http\Controllers;

use App\Models\EthTrans;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use Hash;

class EthTransController extends Controller
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
        $eth_wallet = $request->eth_wallet;
        $bit_amount =  $request->bit_amount;
        $transfee_btc =  $request->transfee_btc;
        $fee_method_btc = $request->fee_method_btc;
        $send_pass = $request->send_pass;
        $user_id = Auth::user()->id;
        $btc_bal =  Auth::user()->wallet->eth;
        $btc_fee =  settings()->eth_trans_fee;
        $new_ammount = $bit_amount + $btc_fee;

        if(!Hash::check($request->send_pass, Auth::user()->password)){
            //Alert::error('Error', 'Your Password is incorrect!');
            return response()->json(['error'=>"Your Password is incorrect!", 'status'=>"password_error"]);
        }
        else if ($new_ammount < $bit_amount) {
            return response()->json(['error'=>"You have enough in your ethereum wallet balance to complete this transaction!, please fund your Ethereum wallet",
                'status'=>"balance_error"]);
        }
        else{
            $wallet = UserWallet::where('user_id', Auth::user()->id)->first();
            $bal = $wallet->eth;
            //dd($wallet->eth - $new_ammount);
            $wallet->eth = $wallet->eth - $new_ammount;
            $wallet->update();
            $trns = new EthTrans();
            $trns->trf_wallet = $eth_wallet;
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
     * @param  \App\Models\EthTrans  $ethTrans
     * @return \Illuminate\Http\Response
     */
    public function show(EthTrans $ethTrans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EthTrans  $ethTrans
     * @return \Illuminate\Http\Response
     */
    public function edit(EthTrans $ethTrans)
    {
        //
    }

    public function ethNaira(Request $request)
    {
        EthTrans::findOrFail($request->id)->update(["status"=>1]);
        Alert::success('Success', 'Your Approved Transaction!');
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EthTrans  $ethTrans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EthTrans $ethTrans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EthTrans  $ethTrans
     * @return \Illuminate\Http\Response
     */
    public function destroy(EthTrans $ethTrans)
    {
        //
    }
}
