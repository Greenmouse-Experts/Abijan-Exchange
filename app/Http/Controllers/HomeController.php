<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\UserProfile;
use App\Models\Rate;
use App\Models\UserBank;
use App\Models\UserWallet;
use App\Models\SecurityQuestion;
use App\Models\Order;
use App\Models\BtcTrans;
use App\Models\USDTTrans;
use App\Models\EthTrans;
use App\Models\NairaTransaction;
use App\Models\User;
use Response;
use App\Models\MailBox;
use App\Models\UserSecurityQuestion;
use RealRashid\SweetAlert\Facades\Alert;
use \Carbon\Carbon;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware(['auth','verified']);
        $this->middleware(['auth']);
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trans = BtcTrans::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->take(7)->get();
        $order = Order::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->take(5)->get();
        $rates = Rate::all();
        return view('dashboard.dashboard', compact('trans', 'rates', 'order'));
    }

    public function naira()
    {
        return view('dashboard.naira');
    }

    public function settings(Request $request)
    {
        $type = $request->query('type');
        if ($type == 'name') {
            $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->inRandomOrder()->first();
            return view('dashboard.complete_profile', compact('question'));
        }
        if ($type == 'verify_me') {
            $bvn = UserBank::where('user_id', Auth::user()->id)->first();
            if ($bvn->bvn != null) {
                Alert::success('Success', 'Your Account has already been verified');
                return redirect()->route('edit_profile');
            } else {
                # code...
                return view('dashboard.verify_me');
            }


        }
        if ($type == 'password') {
            $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->inRandomOrder()->first();
            return view('dashboard.type-password', compact('question'));
        }
        if ($type == 'nin') {
            $nin = UserBank::where('user_id', Auth::user()->id)->first();
            if ($nin->nin != null) {
                Alert::success('Success', 'Your NIN has already been verified');
                return redirect()->route('edit_profile');
            } else {
                $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->inRandomOrder()->first();
                return view('dashboard.nin', compact('question'));
            }

        }
        if ($type == 'gender') {
            $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->inRandomOrder()->first();
            return view('dashboard.type-gender', compact('question'));
        }
        if ($type == 'birth') {
            $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->inRandomOrder()->first();
            return view('dashboard.type-birth', compact('question'));
        }
        if ($type == 'question') {
            $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->inRandomOrder()->first();
            $questions = SecurityQuestion::all();
            return view('dashboard.type-question', compact('questions', 'question'));
        }
        if ($type == 'bank') {
            $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->inRandomOrder()->first();
            return view('dashboard.type-bank', compact('question'));
        }
        if ($type == 'update_name') {
            $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->inRandomOrder()->first();
            $nin = UserBank::where('user_id', Auth::user()->id)->first();
            if ($nin->bvn != null) {
                Alert::warning('Warning', 'You can\'t change your name once your account is verified');
                return redirect()->route('edit_profile');
            } else {
                return view('dashboard.update_name', compact('question'));
            }
        }
        if ($type == 'phone') {
            $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->inRandomOrder()->first();
            $nin = UserBank::where('user_id', Auth::user()->id)->first();
            if ($nin->bvn != null) {
                Alert::warning('Warning', 'You can\'t change your phone number once your account is verified');
                return redirect()->route('edit_profile');
            } else {
                return view('dashboard.type-phone_no', compact('question'));
            }

        }
        if ($type == 'username') {
            $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->inRandomOrder()->first();
            return view('dashboard.type-username', compact('question'));
        }
        if ($type == '2fa') {
            $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->inRandomOrder()->first();
            return view('dashboard.2fa', compact('question'));
        }

        if ($type == 'photo') {
            $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->inRandomOrder()->first();
            return view('dashboard.change-photo', compact('question'));
        }
    }

    public function updateProfile(Request $request){
        $user = new UserProfile();
        $user->user_id = Auth::user()->id;
        $user->firstname = $request->firstname;
        $user->middlename = $request->middlename;
        $user->surname = $request->surname;
        $wallet = new UserWallet();
        $wallet->user_id = Auth::user()->id;
        $bank = new UserBank();
        $bank->user_id = Auth::user()->id;
        if($user->save() AND $wallet->save() AND $bank->save()){
            Alert::success('Success', 'Profile Updated Successfully');
            return redirect()->route('edit_profile');
        }
    }

    public function updateQuesstion(Request $request){
        $question =  UserSecurityQuestion::where('user_id', Auth::user()->id)->first();
        if($question != null){
            //dd($request);
            UserSecurityQuestion::where('user_id', Auth::user()->id)->where('question', $request->question1_sett)->update([
                'question'=> $request->question1_sett,
                'answer'=>$request->answer_1_sett
            ]);
            UserSecurityQuestion::where('user_id', Auth::user()->id)->where('question', $request->question2_sett)->update([
                'question'=> $request->question2_sett,
                'answer'=>$request->answer_2_sett
            ]);
            UserSecurityQuestion::where('user_id', Auth::user()->id)->where('question', $request->question3_sett)->update([
                'question'=> $request->question3_sett,
                'answer'=>$request->answer_3_sett
            ]);
        }
        else{
            UserSecurityQuestion::create([
                'user_id'=>Auth::user()->id,
                'question'=> $request->question1_sett,
                'answer'=>$request->answer_1_sett
            ]);
            UserSecurityQuestion::create([
                'user_id'=>Auth::user()->id,
                'question'=> $request->question2_sett,
                'answer'=>$request->answer_2_sett
            ]);
            UserSecurityQuestion::create([
                'user_id'=>Auth::user()->id,
                'question'=> $request->question3_sett,
                'answer'=>$request->answer_3_sett
            ]);
        }
        Alert::success('Success', 'Security Question Updated Successfully');
            return redirect()->route('edit_profile');

    }

    public function updateBirth(Request $request){
        if (is_null($request->question_id)) {
            Alert::warning('Warning', 'Please set your security question to continue this operation');
            return back();
        }
        $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->where('id', $request->question_id)->first();
        if($question->answer == $request->answer1){
            $user = UserProfile::findOrFail(Auth::user()->profile->id);
            $user->dob = $request->day_sett.'/'.$request->month_sett.'/'.$request->year_sett;
            if($user->save()){
                Alert::success('Success', 'Date of Birth Updated Successfully');
                return redirect()->route('edit_profile');
            }
        }
        else{
            Alert::error('Error', 'Security question answer does not match your security answer');
            return back();
        }
    }

    public function changePhoto(Request $request)
    {
        if (is_null($request->question_id)) {
            return response()->json([
                "status"=>"error",
                "msg"=>"Please set your security question to continue this operation"
            ]);
        }
        $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->where('id', $request->question_id)->first();
        if($question->answer == $request->answer1){
            $user = UserProfile::findOrFail(Auth::user()->profile->id);
            $response = cloudinary()->upload($request->file('photo_sett')->getRealPath())->getSecurePath();
            $user->photo = $response;
            if($user->save()){
                return response()->json([
                    "status"=>"success",
                    "msg"=>"User Picture Updated Sucessfully!"
                ]);
            }
        }
        else{
            return response()->json([
                "status"=>"error",
                "msg"=>"Security question answer does not match your security answer"
            ]);
        }
    }

    public function updateGender(Request $request){
        if (is_null($request->question_id)) {
            Alert::warning('Warning', 'Please set your security question to continue this operation');
            return back();
        }
        $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->where('id', $request->question_id)->first();
        if($question->answer == $request->answer1){
            $user = UserProfile::findOrFail(Auth::user()->profile->id);
            $user->gender = $request->gender;
            if($user->save()){
                Alert::success('Success', 'Gender Updated Successfully');
                return redirect()->route('edit_profile');
            }
        }
        else{
            Alert::error('Error', 'Security question answer does not match your security answer');
            return back();
        }
    }

    public function updateUsername(Request $request){
        if (is_null($request->question_id)) {
            Alert::warning('Warning', 'Please set your security question to continue this operation');
            return back();
        }
        $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->where('id', $request->question_id)->first();
        if (UserProfile::where('username', '=', $request->username)->exists()) {
           Alert::warning('Warning', 'Username already exist!');
            return back();
        }
        if($question->answer == $request->answer1){
            $user = UserProfile::findOrFail(Auth::user()->profile->id);
            $user->username = $request->username;
            if($user->save()){
                Alert::success('Success', 'Username Updated Successfully');
                return redirect()->route('edit_profile');
            }
        }
        else{
            Alert::error('Error', 'Security question answer does not match your security answer');
            return back();
        }
    }

    public function updatePhone(Request $request){
        if (is_null($request->question_id)) {
            Alert::warning('Warning', 'Please set your security question to continue this operation');
            return back();
        }
        $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->where('id', $request->question_id)->first();
        if (UserProfile::where('phone_no', '=', $request->phone_ver)->exists()) {
           Alert::warning('Warning', 'Phone Number already exist!');
            return back();
        }
        if($question->answer == $request->answer1){
            $user = UserProfile::findOrFail(Auth::user()->profile->id);
            $user->phone_no = $request->phone_ver;
            if($user->save()){
                Alert::success('Success', 'Phone Number Updated Successfully');
                return redirect()->route('edit_profile');
            }
        }
        else{
            Alert::error('Error', 'Security question answer does not match your security answer');
            return back();
        }
    }

    public function updatePassword(Request $request)
    {
        # Validation

        if (is_null($request->question_id)) {
            Alert::warning('Warning', 'Please set your security question to continue this operation');
            return back();
        }
        $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->where('id', $request->question_id)->first();
        $request->validate([
            'curr_password_sett' => 'required',
            'pwrd' => 'required',
        ]);

        if(!Hash::check($request->curr_password_sett, Auth::user()->password)){
            Alert::error('Error', 'Current Password Doesn\'t match!');
            return back();
        }

        if($question->answer == $request->answer1){
            #Match The Old Password
            #Update the new Password
            User::whereId(Auth::user()->id)->update([
                'password' => Hash::make($request->pwrd)
            ]);
            Alert::success('Status', 'Password changed successfully!');
            return redirect()->route('edit_profile');
        }
        else{
            Alert::error('Error', 'Security question answer does not match your security answer');
            return back();
        }

    }

    public function updateProfileName(Request $request){

        if (is_null($request->question_id)) {
            Alert::warning('Warning', 'Please set your security question to continue this operation');
            return back();
        }
        $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->where('id', $request->question_id)->first();
        if($question->answer == $request->answer1){
            $user = UserProfile::findOrFail(Auth::user()->profile->id);
            $user->firstname = $request->firstname;
            $user->middlename = $request->middlename;
            $user->surname = $request->surname;
            if($user->save()){
                Alert::success('Success', 'Name Updated Successfully!');
                return redirect()->route('edit_profile');
            }
        }
        else{
            Alert::error('Error', 'Security question answer does not match your security answer');
            return back();
        }
    }

    public function validateBVN(Request $request){
        $firstname = $request->first_name_ver;
        $middlename = $request->middle_name_ver;
        $surname = $request->surname_ver;
        $dob = $request->month_ver.'/'.$request->day_ver.'/'.$request->year_ver;
        $bank_name = $request->bank_name_ver;
        $acct_num = $request->acct_no_ver;
        $bvn = $request->bvn_ver;
        $phone = $request->phone_ver;
        $alt_phone = $request->alt_phone_ver;
        $gender = $request->gender_ver;
        $firstname = $request->first_name_ver;
        $firstname = $request->first_name_ver;
        $bank = UserBank::where('id',  Auth::user()->bank->id)->first();
        $user = UserProfile::where('id', Auth::user()->profile->id)->first();
        //dd(Carbon::parse($dob)->format('d-M-Y'));
        if (UserBank::where('bvn', '=','*****'.substr($bvn, 8))->exists()) {
           Alert::warning('Warning', 'BVN already exist!');
            return back();
        }
        if (UserProfile::where('phone_no', '=', $request->phone_ver)->exists()) {
           Alert::warning('Warning', 'Phone Number already exist!');
            return back();
        }
        $response = Http::withHeaders([
            'userid' => '1669200396645',
            'apiKey' => 'gs10u29xM8ENxpqBz6Sa'
        ])->post('https://api.verified.africa/sfx-verify/v3/id-service', [
            "firstName" => $firstname,
            "lastName" => $surname,
            "phone" => $phone,
            "searchParameter" => $bvn,
            "dob" => Carbon::parse($dob)->format('d-M-Y'),
            "verificationType" => "BVN-BOOLEAN-MATCH"
            /*"firstName"=> "Moshood",
            "lastName"=> "Gbadamosi",
            "phone" => "08134211037",
            "searchParameter" => "22360134913",
            "dob" => "01-Nov-1997",
            "verificationType" => "BVN-BOOLEAN-MATCH"*/
        ]);
        //$result = $bvn->verifyBVN($bvn_number);
        //dd($response->object());
        $res = $response->object()->verificationStatus;
        if($res == 'VERIFIED'){
            $user->firstname = $firstname;
            $user->middlename = $middlename;
            $user->surname = $surname;
            $user->dob = Carbon::parse($dob)->format('d-M-Y');
            $user->gender = $gender;
            $user->phone_no = $phone;
            $bank->bank_name = $bank_name;
            $bank->account_num = $acct_num;
            $bank->user_id = Auth::user()->id;
            $bank->bvn = '*****'.substr($bvn, 8);
            if($bank->update() AND $user->save()){
                Alert::success('Success', 'Your profile is now fully verified!');
                return redirect()->route('edit_profile');
            }
            else{
                Alert::success('Success', 'Your already verified!');
                return redirect()->route('edit_profile');
            }
        }
        else{
            Alert::error('Error', 'Your Personal Details and BVN details does not correspond, please your contact your bank or check bvn correctly');
            return back();
        }
    }

    public function ninVerify(Request $request)
    {
        if (is_null($request->question_id)) {
            Alert::warning('Warning', 'Please set your security question to continue this operation');
            return back();
        }
        $question = UserSecurityQuestion::where('user_id', Auth::user()->id)->where('id', $request->question_id)->first();
        if($question->answer == $request->answer1){
            if (UserBank::where('nin', '=','*****'.substr($request->nin_num, 10))->exists()) {
                Alert::success('Verified', 'Your NIN has already been verified');
                return back();
            }
            $response = Http::withHeaders([
                'userid' => '1669200396645',
                'apiKey' => 'yHCB0zlH794bSMe3sMVA'
            ])->post('https://api.verified.africa/sfx-verify/v3/id-service', [
                "verificationType" => "V-NIN",
                "countryCode" => "NG",
                "transactionReference" => "",
                "searchParameter" => $request->nin_num
            ]);
            //$result = $bvn->verifyBVN($bvn_number);
            $res = $response->object()->verificationStatus;
            //dd($res);
            if($response->object()->verificationStatus == 'VERIFIED'){
                $user = UserBank::where('user_id', Auth::user()->id)->first();
                $user->nin = '*****'.substr($request->nin_num, 10);
                $user->update();
                Alert::success('Verified', 'you NIN has been successfully verified');
               return redirect()->route('edit_profile');
            }
            else{
                Alert::warning('Warning', 'Your input Virtual NIN is incorrect, please check');
                return back();
            }

        }
        else{
            Alert::error('Error', 'YSecurity question answer does not match your security answer');
            return back();
        }

    }

    public function sendMail(Request $request){
        $mail = new MailBox();
        $mail->subject = $request->subject;
        $mail->message = $request->message;
        $mail->category = $request->category;
        $mail->type = 1;
        $mail->user_id = Auth::user()->id;
        if($mail->save()){
            return Response::json($mail);
        }
    }

    public function moveTrash(Request $request)
    {
        $ids = $request->mail;

        foreach ($ids as $data){
            $data_id = MailBox::findOrFail($data);
            $data_id->type = 0;
            $data_id->update();

        }
        //$mail = MailBox::whereIn('id',explode(",",$ids))->where('user_id', Auth::user()->id)->update(['type' => 0]);
        //dd($mail);
        return response()->json(['success'=>"Products Deleted successfully."]);
    }

    public function restoreMail(Request $request)
    {
        $ids = $request->archiveselected;

        foreach ($ids as $data){
            $data_id = MailBox::findOrFail($data);
            $data_id->type = 1;
            $data_id->update();

        }
        //$mail = MailBox::whereIn('id',explode(",",$ids))->where('user_id', Auth::user()->id)->update(['type' => 0]);
        //dd($mail);
        return response()->json(['success'=>"Products Deleted successfully."]);
    }

    public function achiveMail(Request $request)
    {
        $ids = $request->archiveselected;

        foreach ($ids as $data){
            $data_id = MailBox::findOrFail($data);
            $data_id->type = 2;
            $data_id->update();

        }
        //$mail = MailBox::whereIn('id',explode(",",$ids))->where('user_id', Auth::user()->id)->update(['type' => 0]);
        //dd($mail);
        return response()->json(['success'=>"Products Deleted successfully."]);
    }

    public function readMail(Request $request)
    {
        $ids = $request->msg;
        $data = MailBox::findOrFail($ids);
        $data->status = 1;
        $data->update();

        $new_data = (object) [
                "id" => $data->id,
            "message" => $data->message,
            "category" => $data->category,
            "type" => $data->type,
            "status" => $data->status,
            "user_id" => 4,
            "created_at_date" => Carbon::parse($data->created_at)->format('d-m-Y'),
            "created_at_time" =>  Carbon::parse($data->created_at)->format('H:m:s'),
            "subject" => $data->subject
            ];

        //$mail = MailBox::whereIn('id',explode(",",$ids))->where('user_id', Auth::user()->id)->update(['type' => 0]);
        //dd($data);
        return response()->json(['success'=>$new_data]);
    }

    public function deleteOne(Request $request)
    {
        $ids = $request->delete;
        $data = MailBox::findOrFail($ids);
        $data->delete();

        //$mail = MailBox::whereIn('id',explode(",",$ids))->where('user_id', Auth::user()->id)->update(['type' => 0]);
        //dd($data);
        return response()->json(['success'=>$data]);
    }

    public function getInstructions(Request $request)
    {
        $type = 'deposit';
        if($request->type == $type){
            return response()->json($type);
        }
    }

    public function pm_query(Request $request){
        //dd($request->acctno);
        //$res = Http::get('https://perfectmoney.com/acct/acc_name.asp?AccountID=1326603&PassPhrase=Gooday@23lhgmo&Account=U17489579', 'rb');

        $f=fopen('https://perfectmoney.com/acct/acc_name.asp?AccountID=1326603&PassPhrase=Gooday@23lhgmo&Account='.$request->acctno, 'rb');

        if($f===false){
            echo 'error openning url';
        }

        // getting data
        $out="";
        while(!feof($f)) $out.=fgets($f);

        fclose($f);
        return response()->json([
            $out
        ]);
        //dd($out);
    }

    public function deposit()
    {
        return view('dashboard.naira-deposit');
    }

    public function transaction()
    {
        $trans = NairaTransaction::where('user_id', Auth::user()->id)->get();
        return view('dashboard.transaction', compact('trans'));
    }

    public function buynsell()
    {
        return view('dashboard.buy-and-sell');
    }

    public function kyc()
    {
        return view('dashboard.kyc');
    }


    public function profile()
    {
        return view('dashboard.profile');
    }

    public function edit_profile()
    {
        return view('dashboard.profilePage');
    }

    public function Sent()
    {
        $sent = MailBox::where('user_id', Auth::user()->id)->where('type', 1)->get();
        return view('dashboard.mailbox_sent', compact('sent'));
    }

    public function Trash()
    {
        $sent = MailBox::where('user_id', Auth::user()->id)->where('type', 0)->get();
        return view('dashboard.mailbox_trash', compact('sent'));
    }

    public function Archive()
    {
        $sent = MailBox::where('user_id', Auth::user()->id)->where('type', 2)->get();
        return view('dashboard.mailbox_achive', compact('sent'));
    }
    public function Inbox()
    {
        $inbox = MailBox::where('user_id', Auth::user()->id)->where('admin_to', Auth::user()->id)->where('reply_msg', 1)->get();
        return view('dashboard.mailbox', compact('inbox'));
    }

    public function referral()
    {
        return view('dashboard.referral');
    }

    public function sendbtn()
    {
        return view('dashboard.send-btn');
    }

    public function wallet_receive()
    {
        $user_wallet = Auth::user()->wallet;

        if (is_null($user_wallet->btc_wallet_address)) {
            $address = Http::quidax()->post('wallets/btc/addresses');

            sleep(3);
            $address = Http::quidax()->get('wallets/btc/addresses/' . $address->json('data.id'));
            //dd($address->json());

            $user_wallet->btc_wallet_address = $address->json('data.address');
            $user_wallet->save();
        }

        return view('dashboard.wallet_receive', compact('user_wallet'));
    }

    public function wallet_transactions()
    {
        $trans = BtcTrans::where('user_id', Auth::user()->id)->get();
        return view('dashboard.wallet_transactions', compact('trans'));
    }

    public function eth_transactions()
    {
        $trans = EthTrans::where('user_id', Auth::user()->id)->get();
        return view('dashboard.eth_transaction', compact('trans'));
    }

    public function usdt_transactions()
    {
        $trans = USDTTrans::where('user_id', Auth::user()->id)->get();
        return view('dashboard.usdt_transaction', compact('trans'));
    }

    public function ethereum()
    {
        return view('dashboard.ethereum');
    }

    public function receive_eth()
    {
        /* $address = Http::basqet()->post('transaction', [
            'currency' => 'USD',
            'amount' => '1000'
        ]);

        sleep(3);
        $address = Http::basqet()->get('transaction/' . $address->json('data.id'));
        //dd($address->json());

        $address = $address->json('data.address'); */

        return view('dashboard.receive-eth');
    }

    public function receive_usdt()
    {
        /* $address = Http::basqet()->post('transaction', [
            'currency' => 'USD',
            'amount' => '1000'
        ]);

        sleep(3);
        $address = Http::basqet()->get('transaction/' . $address->json('data.id'));
        //dd($address->json());

        $address = $address->json('data.address'); */

        return view('dashboard.receive_usdt');
    }

    public function coming_soon(){
        return view('dashboard.coming-soon');
    }

    public function usdt()
    {
        return view('dashboard.usdt');
    }

    public function referrals()
    {
        return view('dashboard.referrals');
    }


    // // Admin
    // public function admin_welcome()
    // {
    //     return view('admin.admin-welcome');
    // }
    // public function Wrequest()
    // {
    //     return view('admin.withdraw');
    // }
    // public function Drequest()
    // {
    //     return view('admin.deposit');
    // }

}
