<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/buy-and-sell', function () {
    return view('buy-and-sell');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/affiliate', function () {
    return view('affiliate');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

//Route::get('/admin', [App\Http\Controllers\HomePageController::class, 'admin'])->name('admin');
Route::get('/admin/login', [App\Http\Controllers\HomePageController::class, 'admin_login'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\HomePageController::class, 'post_admin_login'])->name('admin.post.login');
Route::get('/register', [App\Http\Controllers\HomePageController::class, 'register'])->name('register')->middleware('CheckReferral');
Route::post('/register-user', [App\Http\Controllers\HomePageController::class, 'post_register'])->name('post.register');
Route::get('/verify/account/{email}', [App\Http\Controllers\HomePageController::class, 'verify_account'])->name('verify.account');
Route::post('/email/verify/resend/{email}', [App\Http\Controllers\HomePageController::class, 'email_verify_resend'])->name('email.verify.resend-2');
Route::post('/email/confirm/{token}', [App\Http\Controllers\HomePageController::class, 'registerConfirm'])->name('email.confirmation');
Route::get('/login', [App\Http\Controllers\HomePageController::class, 'login'])->name('login');
Route::post('/user/login', [App\Http\Controllers\HomePageController::class, 'user_login'])->name('user.login');
Route::get('/forget', [App\Http\Controllers\HomePageController::class, 'forget'])->name('forget');
Route::post('/password/forget',  [App\Http\Controllers\HomePageController::class, 'forget_password'])->name('user.forget.password');
Route::get('/reset/password/email', [App\Http\Controllers\HomePageController::class, 'password_reset_email'])->name('user.reset.password');
Route::post('update/password/reset/', [App\Http\Controllers\HomePageController::class, 'reset_password'])->name('user.update.password');
Route::post('dashboard/sell-pm', [App\Http\Controllers\OrderController::class, 'sell_PM'])->name('sell.pm');
Route::post('dashboard/pm_query', [App\Http\Controllers\HomeController::class, 'pm_query'])->name('pm.query');

/* Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout'); */

// User
Route::post('/dashboard/update', [App\Http\Controllers\HomeController::class, 'updateProfile'])->middleware(['verified', 'auth'])->name('user.update.profile');
Route::get('/dashboard/settings', [App\Http\Controllers\HomeController::class, 'settings'])->middleware(['verified', 'auth'])->name('settings.type.name');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['verified', 'auth', 'userprofile'])->name('home');
Route::prefix('dashboard')->middleware(['verified', 'auth', 'userprofile'])->group(function () {
    Route::get('/naira', [App\Http\Controllers\HomeController::class, 'naira'])->name('naira');
    Route::get('/naira_deposit', [App\Http\Controllers\HomeController::class, 'deposit'])->name('deposit');
    Route::get('/buynsell', [App\Http\Controllers\HomeController::class, 'buynsell'])->name('buynsell');
    Route::get('/naira_transaction', [App\Http\Controllers\HomeController::class, 'transaction'])->name('transaction');
    Route::get('/sendbtn', [App\Http\Controllers\HomeController::class, 'sendbtn'])->name('sendbtn');
    Route::get('/wallet_receive', [App\Http\Controllers\HomeController::class, 'wallet_receive'])->name('wallet_receive');
    Route::get('/wallet_transactions', [App\Http\Controllers\HomeController::class, 'wallet_transactions'])->name('wallet_transactions');
    Route::get('/eth_transactions', [App\Http\Controllers\HomeController::class, 'eth_transactions'])->name('eth_trans');
    Route::post('/verifyNin', [App\Http\Controllers\HomeController::class, 'ninVerify'])->name('verify.nin');
    Route::get('/usdt_transactions', [App\Http\Controllers\HomeController::class, 'usdt_transactions'])->name('usdt_trans');
    Route::get('/ethereum', [App\Http\Controllers\HomeController::class, 'ethereum'])->name('ethereum');
    Route::get('/usdt', [App\Http\Controllers\HomeController::class, 'usdt'])->name('usdt');
    Route::get('/receive_eth', [App\Http\Controllers\HomeController::class, 'receive_eth'])->name('receive_eth');
    Route::get('/coming-soon', [App\Http\Controllers\HomeController::class, 'coming_soon'])->name('coming.soon');
    Route::get('/receive_usdt', [App\Http\Controllers\HomeController::class, 'receive_usdt'])->name('receive_usdt');
    Route::get('/referrals', [App\Http\Controllers\HomeController::class, 'referrals'])->name('referrals');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'edit_profile'])->name('edit_profile');
    Route::post('/question/update', [App\Http\Controllers\HomeController::class, 'updateQuesstion'])->middleware(['verified', 'auth'])->name('user.update.question');
    Route::post('/birth/update', [App\Http\Controllers\HomeController::class, 'updateBirth'])->middleware(['verified', 'auth'])->name('user.update.birth');
    Route::post('/gender/update', [App\Http\Controllers\HomeController::class, 'updateGender'])->middleware(['verified', 'auth'])->name('user.update.gender');
    Route::post('/password/update', [App\Http\Controllers\HomeController::class, 'updatePassword'])->middleware(['verified', 'auth'])->name('user.update.password');
    Route::post('/phone/update', [App\Http\Controllers\HomeController::class, 'updatePhone'])->middleware(['verified', 'auth'])->name('user.update.phone_no');
    Route::post('/username/update', [App\Http\Controllers\HomeController::class, 'updateUsername'])->middleware(['verified', 'auth'])->name('user.update.username');
    Route::post('/name/update', [App\Http\Controllers\HomeController::class, 'updateProfileName'])->middleware(['verified', 'auth'])->name('user.update.profile_name');
    Route::get('/mail/trash', [App\Http\Controllers\HomeController::class, 'Trash'])->middleware(['verified', 'auth'])->name('mailbox.trash');
    Route::get('/mail/sent', [App\Http\Controllers\HomeController::class, 'Sent'])->middleware(['verified', 'auth'])->name('mailbox.sent');
    Route::get('/mail/inbox', [App\Http\Controllers\HomeController::class, 'Inbox'])->middleware(['verified', 'auth'])->name('mailbox.inbox');
    Route::get('/mail/archive', [App\Http\Controllers\HomeController::class, 'Archive'])->middleware(['verified', 'auth'])->name('mailbox.archive');
    Route::post('/bvn/validate', [App\Http\Controllers\HomeController::class, 'validateBvn'])->middleware(['verified', 'auth'])->name('validateBvn');
    Route::post('/mail/send', [App\Http\Controllers\HomeController::class, 'sendMail'])->middleware(['verified', 'auth'])->name('send.mail');
    Route::post('/mail/delete', [App\Http\Controllers\HomeController::class, 'moveTrash'])->middleware(['verified', 'auth'])->name('mail.moveTrash');
    Route::post('/mail/deleteOne', [App\Http\Controllers\HomeController::class, 'deleteOne'])->middleware(['verified', 'auth'])->name('mail.deleteOne');
    Route::post('/mail/restoreMail', [App\Http\Controllers\HomeController::class, 'restoreMail'])->middleware(['verified', 'auth'])->name('mail.restoreMail');
    Route::post('/mail/achiveMail', [App\Http\Controllers\HomeController::class, 'achiveMail'])->middleware(['verified', 'auth'])->name('mail.achiveMail');
    Route::post('/mail/readMail', [App\Http\Controllers\HomeController::class, 'readMail'])->middleware(['verified', 'auth'])->name('mail.readMail');
    Route::post('/sendBtc', [App\Http\Controllers\BtcTransController::class, 'store'])->middleware(['verified', 'auth'])->name('btc.send');
    Route::post('/sendETH', [App\Http\Controllers\EthTransController::class, 'store'])->middleware(['verified', 'auth'])->name('eth.send');
    Route::post('/sendUSDT', [App\Http\Controllers\USDTTransController::class, 'store'])->middleware(['verified', 'auth'])->name('usdt.send');
    Route::post('/depositnaira', [App\Http\Controllers\NairaTransactionController::class, 'deposit'])->middleware(['verified', 'auth'])->name('naira.deposit');
    Route::post('/sendnaira', [App\Http\Controllers\NairaTransactionController::class, 'sendnaira'])->middleware(['verified', 'auth'])->name('naira.sendnaira');
    Route::post('/getInstructions', [App\Http\Controllers\HomeController::class, 'getInstructions'])->middleware(['verified', 'auth'])->name('getInstructions');
    Route::post('/quickbuy', [App\Http\Controllers\OrderController::class, 'store'])->middleware(['verified', 'auth'])->name('quickbuy');
    Route::post('/quicksell', [App\Http\Controllers\OrderController::class, 'quicksell'])->middleware(['verified', 'auth'])->name('quicksell');

    Route::post('/cancel_sell', [App\Http\Controllers\OrderController::class, 'cancel_sell'])->middleware(['verified', 'auth'])->name('cancel_sell');
    Route::post('/palertz_sell', [App\Http\Controllers\OrderController::class, 'palertz_sell'])->middleware(['verified', 'auth'])->name('palertz_sell');
    Route::get('/sendnotice', [App\Http\Controllers\OrderController::class, 'sendnotice'])->middleware(['verified', 'auth'])->name('sendnotice');
    Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->middleware(['verified', 'auth'])->name('orders');
    Route::get('/orderinfo', [App\Http\Controllers\OrderController::class, 'orderInfo'])->middleware(['verified', 'auth'])->name('orderInfo');
    Route::post('/changePhoto', [App\Http\Controllers\HomeController::class, 'changePhoto'])->middleware(['verified', 'auth'])->name('changePhoto');
   /*  Route::get('/typebirth', [App\Http\Controllers\HomeController::class, 'typebirth'])->name('typebirth');
    Route::get('/typequestion', [App\Http\Controllers\HomeController::class, 'typequestion'])->name('typequestion');
    Route::get('/typegender', [App\Http\Controllers\HomeController::class, 'typegender'])->name('typegender');
    Route::get('/typepassword', [App\Http\Controllers\HomeController::class, 'typepassword'])->name('typepassword'); */
    Route::get('/kyc', [App\Http\Controllers\HomeController::class, 'kyc'])->name('kyc');
    //Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('/referral', [App\Http\Controllers\HomeController::class, 'referral'])->name('referral');
});

// Admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/adminwelcome', [App\Http\Controllers\AdminController::class, 'index'])->name('admin_welcome');
    Route::get('/withdraw_request', [App\Http\Controllers\AdminController::class, 'withdraw_request'])->name('Wrequest')->middleware('can:wallet-request');;
    Route::get('/deposit_request', [App\Http\Controllers\AdminController::class, 'deposit_request'])->name('Drequest')->middleware('can:wallet-request');
    Route::get('/send_request', [App\Http\Controllers\AdminController::class, 'send_request'])->name('send_request')->middleware('can:send-request');;
    Route::get('/send_eth', [App\Http\Controllers\AdminController::class, 'send_eth'])->name('send_eth')->middleware('can:send-request');
    Route::get('/send_usdt', [App\Http\Controllers\AdminController::class, 'send_usdt'])->name('send_usdt')->middleware('can:send-request');
    Route::get('/receive_request', [App\Http\Controllers\AdminController::class, 'receive_request'])->name('receive_request');
    Route::get('/swap_request', [App\Http\Controllers\AdminController::class, 'swap_request'])->name('swap_request');
    Route::get('/message-center', [App\Http\Controllers\AdminController::class, 'message_center'])->name('message_center')->middleware('can:message-center');;
    Route::get('/sent-mails', [App\Http\Controllers\AdminController::class, 'sent_mails'])->name('sent_mails')->middleware('can:message-center');;
    Route::get('/support', [App\Http\Controllers\AdminController::class, 'support'])->name('support')->middleware('can:support');
    Route::get('/mailbox_trash', [App\Http\Controllers\AdminController::class, 'mailbox_trash'])->name('mailbox_trash')->middleware('can:message-center');
    Route::get('/mailbox_archive', [App\Http\Controllers\AdminController::class, 'mailbox_archive'])->name('mailbox_archive')->middleware('can:message-center');
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'adminprofile'])->name('adminprofile');
    Route::get('/view_referral', [App\Http\Controllers\AdminController::class, 'view_referral'])->name('view_referral')->middleware('can:view-referrals');
    Route::get('/buy_sell', [App\Http\Controllers\AdminController::class, 'buy_sell'])->name('buy_sell')->middleware('can:buy-and-sell');
    Route::get('/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('settings')->middleware('can:view-settings');
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::post('users/change_type/{id}', [App\Http\Controllers\UserController::class, 'change_type'])->name('users.change_type');
    Route::post('users/addBtc/{id}', [App\Http\Controllers\UserController::class, 'add_btc'])->name('users.add_btc');
    Route::post('users/deductBtc/{id}', [App\Http\Controllers\UserController::class, 'deduct_btc'])->name('users.deduct_btc');
    Route::post('users/addUSDT/{id}', [App\Http\Controllers\UserController::class, 'add_usdt'])->name('users.add_usdt');
    Route::post('users/deductUSDT/{id}', [App\Http\Controllers\UserController::class, 'deduct_usdt'])->name('users.deduct_usdt');
    Route::post('users/addEth/{id}', [App\Http\Controllers\UserController::class, 'add_eth'])->name('users.add_eth');
    Route::post('users/deductEth/{id}', [App\Http\Controllers\UserController::class, 'deduct_eth'])->name('users.deduct_eth');
    Route::post('users/addNaira/{id}', [App\Http\Controllers\UserController::class, 'add_naira'])->name('users.add_naira');
    Route::post('users/deductNaira/{id}', [App\Http\Controllers\UserController::class, 'deduct_naira'])->name('users.deduct_naira');
    Route::get('/set_rate', [App\Http\Controllers\AdminController::class, 'setRate'])->name('set_rate')->middleware('can:set-rate');
    Route::get('/create_admin', [App\Http\Controllers\AdminController::class, 'createUser'])->name('create_admin')->middleware('can:create-admin');
    Route::post('/createAdmin', [App\Http\Controllers\AdminController::class, 'createAdminPost'])->name('createAdmin')->middleware('can:create-admin');
    Route::post('/updateAdmin', [App\Http\Controllers\AdminController::class, 'updateAdminPost'])->name('updateAdmin')->middleware('can:create-admin');
    Route::post('/delete_admin/{id}', [App\Http\Controllers\AdminController::class, 'delete_admin'])->name('delete_admin');/* ->middleware('can:delete-admin'); */
    Route::post('/updateName', [App\Http\Controllers\AdminController::class, 'UpdateName'])->name('admin.update.name');
    Route::post('/updatePassword', [App\Http\Controllers\AdminController::class, 'UpdatePassword'])->name('admin.update.password');
    Route::post('/SetRate', [App\Http\Controllers\AdminController::class, 'AddRate'])->name('SetRate')->middleware('can:set-rate');
    Route::post('/update_rate', [App\Http\Controllers\AdminController::class, 'updateRate'])->name('updateRate')->middleware('can:set-rate');
    Route::post('/delete_rate', [App\Http\Controllers\AdminController::class, 'deleteRate'])->name('delete.rate');
    Route::post('/replyMsg', [App\Http\Controllers\AdminController::class, 'admin_reply_msg'])->name('admin.reply_msg');
    Route::post('/updateSetting', [App\Http\Controllers\AdminController::class, 'UpdateSetting'])->name('settings.update')->middleware('can:update-settings');
    Route::post('/updateNairaDeposit', [App\Http\Controllers\NairaTransactionController::class, 'updateDepositNaira'])->middleware(['verified', 'auth'])->name('naira.updateDeposit')->middleware('can:update-wallet-request');
    Route::post('/updateNairaWithdraw', [App\Http\Controllers\NairaTransactionController::class, 'updateWithdrawNaira'])->name('naira.updateWithdraw')->middleware('can:update-wallet-request');
    Route::post('/updateBTC', [App\Http\Controllers\BtcTransController::class, 'btcNaira'])->name('btc.update')->middleware('can:update-send-request');
    Route::post('/updateUSDT', [App\Http\Controllers\USDTTransController::class, 'usdtNaira'])->name('usdt.update')->middleware('can:update-send-request');
    Route::post('/updateETH', [App\Http\Controllers\EthTransController::class, 'ethNaira'])->name('eth.update')->middleware('can:update-send-request');
    Route::post('/updateBuy', [App\Http\Controllers\OrderController::class, 'buyUpdate'])->name('buy.update')->middleware('can:update-buy-and-sell');
    Route::post('/InvoiceUpdate', [App\Http\Controllers\OrderController::class, 'InvoiceUpdate'])->name('invoice.update')->middleware('can:update-buy-and-sell');
    Route::post('/mail/readMail', [App\Http\Controllers\AdminController::class, 'readMail'])->name('mail.readMail');
});
