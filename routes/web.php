<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/account_2Faccount', function () {
    return view('account_2Faccount');
});
Route::get('/account_2Faddress', function () {
    return view('account_2Faddress');
});
Route::get('/account_2Fdownload', function () {
    return view('account_2Fdownload');
});
Route::get('/account_2Fedit', function () {
    return view('account_2Fedit');
});
Route::get('/account_2Fforgotten', function () {
    return view('account_2Fforgotten');
});
Route::get('/account_2Forder', function () {
    return view('account_2Forder');
});
Route::get('/account_2Fpassword', function () {
    return view('account_2Fpassword');
});
Route::get('/account_2Fregister', function () {
    return view('account_2Fregister');
});
Route::get('/account_2Fvoucher', function () {
    return view('account_2Fvoucher');
});
Route::get('/account_2Fwishlish', function () {
    return view('account_2Fwishlish');
});
Route::get('/affiliate_2flogin', function () {
    return view('affiliate_2Flogin');
});
Route::get('/affiliate_2fregister', function () {
    return view('affiliate_2Fregister');
});
Route::get('/checkout_2Fcheckout', function () {
    return view('checkout_2Fcheckout');
});
Route::get('/common_2Fhome', function () {
    return view('common_2home');
});
Route::get('/information_2Fcontac', function () {
    return view('information_2Fcontac');
});
Route::get('/information_2information_information_id=3', function () {
    return view('information_2information_information_id=3');
});
Route::get('/information_2information_information_id=4', function () {
    return view('information_2information_information_id=4');
});
Route::get('/information_2information_information_id=5', function () {
    return view('information_2information_information_id=5');
});
Route::get('/information_2information_information_id=6', function () {
    return view('information_2information_information_id=6');
});
Route::get('/information_2Fsitmap', function () {
    return view('information_2Fsitmap');
});
Route::get('/information_2Ftt_blog_2fblogs', function () {
    return view('information_2Ftt_blog_2fblogs');
});
Route::get('/information_2Ftt_blog_tt_blog_id=1', function () {
    return view('information_2Ftt_blog_tt_blog_id=1');
});
Route::get('/information_2Ftt_blog_tt_blog_id=2', function () {
    return view('information_2Ftt_blog_tt_blog_id=2');
});
Route::get('/information_2Ftt_blog_tt_blog_id=3', function () {
    return view('information_2Ftt_blog_tt_blog_id=3');
});
Route::get('/information_2Ftt_blog_tt_blog_id=4', function () {
    return view('information_2Ftt_blog_tt_blog_id=4');
});
Route::get('/information_2Ftt_blog', function () {
    return view('information_2Ftt_blog');
});
Route::get('/product_2Fcategory_path=20_26_59', function () {
    return view('product_2Fcategory_path=20_26_59');
});
Route::get('/product_2Fcategory_path=20_26_60', function () {
    return view('product_2Fcategory_path=20_26_60');
});
Route::get('/product_2Fcategory_path=20_26_61', function () {
    return view('product_2Fcategory_path=20_26_61');
});
Route::get('/product_2Fcategory_path=20_26_85', function () {
    return view('product_2Fcategory_path=20_26_85');
});
Route::get('/product_2Fcategory_path=20_26', function () {
    return view('product_2Fcategory_path=20_26_');
});
Route::get('/product_2Fcategory_path=20_27_62', function () {
    return view('product_2Fcategory_path=20_27_62');
});
Route::get('/product_2Fcategory_path=20_27_63', function () {
    return view('product_2Fcategory_path=20_27_63');
});
Route::get('/product_2Fcategory_path=20_27_64', function () {
    return view('product_2Fcategory_path=20_27_64');
});
Route::get('/product_2Fcategory_path=20_27_86', function () {
    return view('product_2Fcategory_path=20_27_86');
});
Route::get('/product_2Fcategory_path=20_27_', function () {
    return view('product_2Fcategory_path=20_27');
});
Route::get('/product_2Fcategory_path=20_87_88', function () {
    return view('product_2Fcategory_path=20_87_88');
});
Route::get('/product_2Fcategory_path=20_27_90', function () {
    return view('product_2Fcategory_path=20_27_90');
});
Route::get('/product_2Fcategory_path=20_87_91', function () {
    return view('product_2Fcategory_path=20_87_91');
});
Route::get('/product_2Fcategory_path=20_87_97', function () {
    return view('product_2Fcategory_path=20_87_97');
});
Route::get('/product_2Fcategory_path=20_87', function () {
    return view('product_2Fcategory_path=20_87');
});
Route::get('/product_2Fcategory_path=20_92_93', function () {
    return view('product_2Fcategory_path=20_92_93');
});
Route::get('/product_2Fcategory_path=20_92_94', function () {
    return view('product_2Fcategory_path=20_92_94');
});
Route::get('/product_2Fcategory_path=20_92_95', function () {
    return view('product_2Fcategory_path=20_92_95');
});
Route::get('/product_2Fcategory_path=20_92_96', function () {
    return view('product_2Fcategory_path=20_92_96');
});
Route::get('/product_2Fcategory_path=20_92', function () {
    return view('product_2Fcategory_path=20_92');
});
Route::get('/product_2Fcategory_path=20', function () {
    return view('product_2Fcategory_path=20_');
});
Route::get('/product_2Fcategory_path=20_page=2', function () {
    return view('product_2Fcategory_path=20_page=2');
});
Route::get('/product_2Fcategory_path=20', function () {
    return view('product_2Fcategory_path=20');
});
Route::get('/product_2Fcategory_path=25_98_100', function () {
    return view('product_2Fcategory_path=25_98_100');
});
Route::get('/product_2Fcategory_path=25_98_101', function () {
    return view('product_2Fcategory_path= 25_98_101');
});
Route::get('/product_2Fcategory_path=25_98_102', function () {
    return view('product_2Fcategory_path=25_98_102');
});
Route::get('/product_2Fcategory_path=25_98', function () {
    return view('product_2Fcategory_path=25_98');
});
Route::get('/product_2Fcategory_path=25_99_103', function () {
    return view('product_2Fcategory_path=25_99_103');
});
Route::get('/product_2Fcategory_path=25_99_104', function () {
    return view('product_2Fcategory_path=25_99_104');
});
Route::get('/product_2Fcategory_path=25_99_105', function () {
    return view('product_2Fcategory_path=25_99_105');
});
Route::get('/product_2Fcategory_path=25_99', function () {
    return view('product_2Fcategory_path=25_99');
});
Route::get('/product_2Fcategory_path=25', function () {
    return view('product_2Fcategory_path=25');
});
Route::get('/product_2Fcategory_path=26_59', function () {
    return view('product_2Fcategory_path=26-59');
});

Route::get('/product_2Fcategory_path=26_60', function () {
    return view('product_2Fcategory_path=26-60');
});

Route::get('/product_2Fcategory_path=26_61', function () {
    return view('product_2Fcategory_path=26-61');
});

Route::get('/product_2Fcategory_path=26_85', function () {
    return view('product_2Fcategory_path=26-85');
});

Route::get('/product_2Fcategory_path=26', function () {
    return view('product_2Fcategory_path=26');
});
Route::get('/product_2Fcategory_path=27_62', function () {
    return view('product_2Fcategory_path=27_62');
});
Route::get('/product_2Fcategory_path=27_63', function () {
    return view('product_2Fcategory_path=27_63');
});
Route::get('/product_2Fcategory_path=27_64', function () {
    return view('product_2Fcategory_path=27_64');
});
Route::get('/product_2Fcategory_path=27_86', function () {
    return view('product_2Fcategory_path=27_86');
});
Route::get('/product_2Fcategory_path=27', function () {
    return view('product_2Fcategory_path=27');
});
Route::get('/product_2Fcategory_path=59', function () {
    return view('product_2Fcategory_path=59');
});
Route::get('/product_2Fcategory_path=60', function () {
    return view('product_2Fcategory_path=60');
});
Route::get('/product_2Fcategory_path=61', function () {
    return view('product_2Fcategory_path=61');
});
Route::get('/product_2Fcategory_path=62', function () {
    return view('product_2Fcategory_path=62');
});
Route::get('/product_2Fcategory_path=63', function () {
    return view('product_2Fcategory_path=63');
});
Route::get('/product_2Fcategory_path=64', function () {
    return view('product_2Fcategory_path=64');
});
Route::get('/product_2Fcategory_path=65_81_110', function () {
    return view('product_2Fcategory_path=65_81_110');
});
Route::get('/product_2Fcategory_path=65_81_111', function () {
    return view('product_2Fcategory_path=65_81_111');
});
Route::get('/product_2Fcategory_path=65_81_112', function () {
    return view('product_2Fcategory_path=65_81_112');
});
Route::get('/product_2Fcategory_path=65_81_113', function () {
    return view('product_2Fcategory_path=65_81_113');
});
Route::get('/product_2Fcategory_path=65_81', function () {
    return view('product_2Fcategory_path=65_81');
});
Route::get('/product_2Fcategory_path=65_82_106', function () {
    return view('product_2Fcategory_path=65_82_106');
});
Route::get('/product_2Fcategory_path=65_82_107', function () {
    return view('product_2Fcategory_path=65_82_107');
});
Route::get('/product_2Fcategory_path=65_82_108', function () {
    return view('product_2Fcategory_path=65_82_108');
});
Route::get('/product_2Fcategory_path=65_82_109', function () {
    return view('product_2Fcategory_path=65_82_109');
});
Route::get('/product_2Fcategory_path=65_82', function () {
    return view('product_2Fcategory_path=65_82');
});
Route::get('/product_2Fcategory_path=65', function () {
    return view('product_2Fcategory_path=65');
});
Route::get('/product_2Fcategory_path=66', function () {
    return view('product_2Fcategory_path=66');
});
Route::get('/product_2Fcategory_path=67', function () {
    return view('product_2Fcategory_path=67');
});
Route::get('/product_2Fcategory_path=69', function () {
    return view('product_2Fcategory_path=69');
});
Route::get('/product_2Fcategory_path=71', function () {
    return view('product_2Fcategory_path=71');
});
Route::get('/product_2Fcategory_path=81_110', function () {
    return view('product_2Fcategory_path=81_110');
});
Route::get('/product_2Fcategory_path=81_111', function () {
    return view('product_2Fcategory_path=81_111');
});
Route::get('/product_2Fcategory_path=81_112', function () {
    return view('product_2Fcategory_path=81_112');
});
Route::get('/product_2Fcategory_path=81_113', function () {
    return view('product_2Fcategory_path=81_113');
});
Route::get('/product_2Fcategory_path=81', function () {
    return view('product_2Fcategory_path=81');
});
Route::get('/product_2Fcategory_path=82_106', function () {
    return view('product_2Fcategory_path=82_106');
});
Route::get('/product_2Fcategory_path=82_107', function () {
    return view('product_2Fcategory_path=82_107');
});
Route::get('/product_2Fcategory_path=82_108', function () {
    return view('product_2Fcategory_path=82_108');
});
Route::get('/product_2Fcategory_path=82_109', function () {
    return view('product_2Fcategory_path=82_109');
});
Route::get('/product_2Fcategory_path=82', function () {
    return view('product_2Fcategory_path=82');
});
Route::get('/product_2Fcategory_path=85', function () {
    return view('product_2Fcategory_path=85');
});
Route::get('/product_2Fcategory_path=86', function () {
    return view('product_2Fcategory_path=86');
});
Route::get('/product_2Fcategory_path=87_88', function () {
    return view('product_2Fcategory_path=88_88');
});
Route::get('/product_2Fcategory_path=87_90', function () {
    return view('product_2Fcategory_path=87_90');
});
Route::get('/product_2Fcategory_path=87_91', function () {
    return view('product_2Fcategory_path=87_91');
});
Route::get('/product_2Fcategory_path=87_97', function () {
    return view('product_2Fcategory_path=87_97');
});
Route::get('/product_2Fcategory_path=87', function () {
    return view('product_2Fcategory_path=87');
});
Route::get('/product_2Fcategory_path=88', function () {
    return view('product_2Fcategory_path=88');
});
Route::get('/product_2Fcategory_path=90', function () {
    return view('product_2Fcategory_path=90');
});
Route::get('/product_2Fcategory_path=91', function () {
    return view('product_2Fcategory_path=91');
});
Route::get('/product_2Fcategory_path=92_93', function () {
    return view('product_2Fcategory_path=92_93');
});
Route::get('/product_2Fcategory_path=92_94', function () {
    return view('product_2Fcategory_path=92_94');
});
Route::get('/product_2Fcategory_path=92_95', function () {
    return view('product_2Fcategory_path=92_95');
});
Route::get('/product_2Fcategory_path=92_96', function () {
    return view('product_2Fcategory_path=92_96');
});
Route::get('/product_2Fcategory_path=92', function () {
    return view('product_2Fcategory_path=92');
});
Route::get('/product_2Fcategory_path=93', function () {
    return view('product_2Fcategory_path=93');
});
Route::get('/product_2Fcategory_path=94', function () {
    return view('product_2Fcategory_path=94');
});
Route::get('/product_2Fcategory_path=95', function () {
    return view('product_2Fcategory_path=95');
});
Route::get('/product_2Fcategory_path=96', function () {
    return view('product_2Fcategory_path=96');
});
Route::get('/product_2Fcategory_path=97', function () {
    return view('product_2Fcategory_path=97');
});
Route::get('/product_2Fcategory_path=98_100', function () {
    return view('product_2Fcategory_path=98_100');
});
Route::get('/product_2Fcategory_path=98_101', function () {
    return view('product_2Fcategory_path=98_101');
});
Route::get('/product_2Fcategory_path=98_102', function () {
    return view('product_2Fcategory_path=98_102');
});
Route::get('/product_2Fcategory_path=98', function () {
    return view('product_2Fcategory_path=98');
});
Route::get('/product_2Fcategory_path=99_103', function () {
    return view('product_2Fcategory_path=99_103');
});
Route::get('/product_2Fcategory_path=99_104', function () {
    return view('product_2Fcategory_path=99_104');
});
Route::get('/product_2Fcategory_path=99_105', function () {
    return view('product_2Fcategory_path=99_105');
});
Route::get('/product_2Fcategory_path=99', function () {
    return view('product_2Fcategory_path=99');
});
Route::get('/product_2Fcategory_path=100', function () {
    return view('product_2Fcategory_path=100');
});
Route::get('/product_2Fcategory_path=101', function () {
    return view('product_2Fcategory_path=101');
});
Route::get('/product_2Fcategory_path=102', function () {
    return view('product_2Fcategory_path=102');
});
Route::get('/product_2Fcategory_path=103', function () {
    return view('product_2Fcategory_path=103');
});
Route::get('/product_2Fcategory_path=104', function () {
    return view('product_2Fcategory_path=104');
});
Route::get('/product_2Fcategory_path=105', function () {
    return view('product_2Fcategory_path=105');
});
Route::get('/product_2Fcategory_path=106', function () {
    return view('product_2Fcategory_path=106');
});
Route::get('/product_2Fcategory_path=107', function () {
    return view('product_2Fcategory_path=107');
});
Route::get('/product_2Fcategory_path=108', function () {
    return view('product_2Fcategory_path=108');
});
Route::get('/product_2Fcategory_path=109', function () {
    return view('product_2Fcategory_path=109');
});
Route::get('/product_2Fcategory_path=110', function () {
    return view('product_2Fcategory_path=110');
});
Route::get('/product_2Fcategory_path=111', function () {
    return view('product_2Fcategory_path=111');
});
Route::get('/product_2Fcategory_path=112', function () {
    return view('product_2Fcategory_path=112');
});
Route::get('/product_2Fcategory_path=113', function () {
    return view('product_2Fcategory_path=113');
});
Route::get('/product_2Fcompare', function () {
    return view('product_2Fcompare');
});
Route::get('/product_2Fmanufacturer_2Finfo_manufacturer_id=5', function () {
    return view('product_2Fmanufacturer_2Finfo_manufacturer_id=5');
});
Route::get('/product_2Fmanufacturer_2Finfo_manufacturer_id=6', function () {
    return view('product_2Fmanufacturer_2Finfo_manufacturer_id=6');
});
Route::get('/product_2Fmanufacturer_2Finfo_manufacturer_id=7', function () {
    return view('product_2Fmanufacturer_2Finfo_manufacturer_id=7');
});
Route::get('/product_2Fmanufacturer_2Finfo_manufacturer_id=8_page=', function () {
    return view('product_2Fmanufacturer_2Finfo_manufacturer_id=8_page=');
});
Route::get('/product_2Fmanufacturer_2Finfo_manufacturer_id=8_page=1', function () {
    return view('product_2Fmanufacturer_2Finfo_manufacturer_id=8_page=1');
});
Route::get('/product_2Fmanufacturer_2Finfo_manufacturer_id=8_page=2', function () {
    return view('product_2Fmanufacturer_2Finfo_manufacturer_id=8_page=2');
});
Route::get('/product_2Fmanufacturer_2Finfo_manufacturer_id=9', function () {
    return view('product_2Fmanufacturer_2Finfo_manufacturer_id=9');
});
Route::get('/product_2Fmanufacturer_2Finfo_manufacturer_id=10', function () {
    return view('product_2Fmanufacturer_2Finfo_manufacturer_id=10');
});
Route::get('/product_2Fmanufacturer', function () {
    return view('product_2Fmanufacturer');
});
Route::get('/product_2Fproduct_manufacturer_id=5_product_id=28', function () {
    return view('product_2Fproduct_manufacturer_id=5_product_id=28');
});
Route::get('/product_2Fproduct_manufacturer_id=6_product_id=29', function () {
    return view('product_2Fproduct_manufacturer_id=6_product_id=29');
});
Route::get('/product_2Fproduct_manufacturer_id=7_product_id=47', function () {
    return view('product_2Fproduct_manufacturer_id=7_product_id=47');
});
Route::get('/product_2Fproduct_manufacturer_id=8_page=2_product_id=40', function () {
    return view('product_2Fproduct_manufacturer_id=8_page=2_product_id=40');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=32_page=', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=32_page=');
});
Route::get('/product_2Fproduct_manufacturer_id=8product_id=32', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=32');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=34', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=34');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=34_page=', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=34_page=');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=34', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=34');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=36_page=', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=36_page=');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=36', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=36');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=40_page=2', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=40_page=2');
});

Route::get('/product_2Fproduct_manufacturer_id=8_product_id=41_page=', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=41_page=');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=41', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=41');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=42_page=', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=42_page=');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=42', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=42');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=43_page=', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=43_page=');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=43', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=43');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=44_page=', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=44_page=');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=44', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=44');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=45_page=', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=45_page=');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=45', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=45');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=48_page=', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=48_page=');
});
Route::get('/product_2Fproduct_manufacturer_id=8_product_id=48', function () {
    return view('product_2Fproduct_manufacturer_id=8_product_id=48');
});
Route::get('/product_2Fproduct_manufacturer_id=9_product_id=30', function () {
    return view('product_2Fproduct_manufacturer_id=9_product_id=30');
});
Route::get('/product_2Fproduct_manufacturer_id=10_product_id=46', function () {
    return view('product_2Fproduct_manufacturer_id=10_product_id=46');
});
Route::get('/product_2Fproduct_path=20_27_product_id=28', function () {
    return view('product_2Fproduct_path=20_27_product_id=28');
});
Route::get('/product_2Fproduct_path=20_27_product_id=41', function () {
    return view('product_2Fproduct_path=20_27_product_id=41');
});
Route::get('/product_2Fproduct_path=20_product_id=28', function () {
    return view('product_2Fproduct_path=20_product_id=28');
});
Route::get('/product_2Fproduct_path=20_product_id=29', function () {
    return view('product_2Fproduct_path=20_product_id=29');
});
Route::get('/product_2Fproduct_path=20_product_id=30', function () {
    return view('product_2Fproduct_path=20_product_id=30');
});
Route::get('/product_2Fproduct_path=20_product_id=32', function () {
    return view('product_2Fproduct_path=20_product_id=32');
});
Route::get('/product_2Fproduct_path=20_product_id=33', function () {
    return view('product_2Fproduct_path=20_product_id=33');
});
Route::get('/product_2Fproduct_path=20_product_id=35', function () {
    return view('product_2Fproduct_path=20_product_id=35');
});
Route::get('/product_2Fproduct_path=20_product_id=40', function () {
    return view('product_2Fproduct_path=20_product_id=40');
});
Route::get('/product_2Fproduct_path=20_product_id=41', function () {
    return view('product_2Fproduct_path=20_product_id=41');
});
Route::get('/product_2Fproduct_path=20_product_id=42', function () {
    return view('product_2Fproduct_path=20_product_id=42');
});
Route::get('/product_2Fproduct_path=20_product_id=43', function () {
    return view('product_2Fproduct_path=20_product_id=43');
});
Route::get('/product_2Fproduct_path=20_product_id=44', function () {
    return view('product_2Fproduct_path=20_product_id=44');
});

Route::get('/product_2Fproduct_path=20_product_id=46', function () {
    return view('product_2Fproduct_path=20_product_id=46');
});

Route::get('/product_2Fproduct_path=20_product_id=47', function () {
    return view('product_2Fproduct_path=20_product_id=47');
});

Route::get('/product_2Fproduct_path=20_product_id=48', function () {
    return view('product_2Fproduct_path=20_product_id=48');
});

Route::get('/product_2Fproduct_path=25_product_id=28', function () {
    return view('product_2Fproduct_path=25_product_id=28');
});

Route::get('/product_2Fproduct_path=25_product_id=30', function () {
    return view('product_2Fproduct_path=25_product_id=30');
});

Route::get('/product_2Fproduct_path=25_product_id=32', function () {
    return view('product_2Fproduct_path=25_product_id=32');
});
Route::get('/product_2Fproduct_path=25_product_id=34', function () {
    return view('product_2Fproduct_path=25_product_id=34');
});

Route::get('/product_2Fproduct_path=25_product_id=36', function () {
    return view('product_2Fproduct_path=25_product_id=36');
});

Route::get('/product_2Fproduct_path=25_product_id=41', function () {
    return view('product_2Fproduct_path=25_product_id=41');
});

Route::get('/product_2Fproduct_path=25_product_id=42', function () {
    return view('product_2Fproduct_path=25_product_id=42');
});

Route::get('/product_2Fproduct_path=25_product_id=43', function () {
    return view('product_2Fproduct_path=25_product_id=43');
});
Route::get('/product_2Fproduct_path=25_product_id=47', function () {
    return view('product_2Fproduct_path=25_product_id=47');
});
Route::get('/product_2Fproduct_path=27_product_id=28', function () {
    return view('product_2Fproduct_path=27_product_id=28');
});
Route::get('/product_2Fproduct_path=27_product_id=41', function () {
    return view('product_2Fproduct_path=27_product_id=41');
});
Route::get('/product_2Fproduct_path=65_product_id=28', function () {
    return view('product_2Fproduct_path=65_product_id=28');
});
Route::get('/product_2Fproduct_path=65_product_id=30', function () {
    return view('product_2Fproduct_path=65_product_id=30');
});
Route::get('/product_2Fproduct_path=65_product_id=32', function () {
    return view('product_2Fproduct_path=65_product_id=32');
});
Route::get('/product_2Fproduct_path=65_product_id=34', function () {
    return view('product_2Fproduct_path=65_product_id=34');
});
Route::get('/product_2Fproduct_path=65_product_id=36', function () {
    return view('product_2Fproduct_path=65_product_id=36');
});
Route::get('/product_2Fproduct_path=65_product_id=42', function () {
    return view('product_2Fproduct_path=65_product_id=42');
});
Route::get('/product_2Fproduct_path=65_product_id=43', function () {
    return view('product_2Fproduct_path=65_product_id=43');
});
Route::get('/product_2Fproduct_path=65_product_id=47', function () {
    return view('product_2Fproduct_path=65_product_id=47');
});
Route::get('/product_2Fproduct_path=66_product_id=30', function () {
    return view('product_2Fproduct_path=66_product_id=30');
});
Route::get('/product_2Fproduct_path=66_product_id=36', function () {
    return view('product_2Fproduct_path=66_product_id=36');
});
Route::get('/product_2Fproduct_path=66_product_id=41', function () {
    return view('product_2Fproduct_path=66_product_id=41');
});
Route::get('/product_2Fproduct_path=66_product_id=42', function () {
    return view('product_2Fproduct_path=66_product_id=42');
});
Route::get('/product_2Fproduct_path=66_product_id=45', function () {
    return view('product_2Fproduct_path=66_product_id=45');
});
Route::get('/product_2Fproduct_path=66_product_id=47', function () {
    return view('product_2Fproduct_path=66_product_id=47');
});
Route::get('/product_2Fproduct_path=71_product_id=28', function () {
    return view('product_2Fproduct_path=71_product_id=28');
});

Route::get('/product_2Fproduct_product_id=30', function () {
    return view('product_2Fproduct_product_id=30');
});
Route::get('/product_2Fproduct_product_id=32', function () {
    return view('product_2Fproduct_product_id=32');
});
Route::get('/product_2Fproduct_product_id=33', function () {
    return view('product_2Fproduct_product_id=33');
});
Route::get('/product_2Fproduct_product_id=34', function () {
    return view('product_2Fproduct_product_id=34');
});

Route::get('/product_2Fproduct_product_id=35', function () {
    return view('product_2Fproduct_product_id=35');
});

Route::get('/product_2Fproduct_product_id=36', function () {
    return view('product_2Fproduct_product_id=36');
});

Route::get('/product_2Fproduct_product_id=40', function () {
    return view('product_2Fproduct_product_id=40');
});

Route::get('/product_2Fproduct_product_id=41', function () {
    return view('product_2Fproduct_product_id=41');
});
Route::get('/product_2Fproduct_product_id=42', function () {
    return view('product_2Fproduct_product_id=42');
});

Route::get('/product_2Fproduct_product_id=43', function () {
    return view('product_2Fproduct_product_id=43');
});

Route::get('/product_2Fproduct_product_id=44', function () {
    return view('product_2Fproduct_product_id=44');
});

Route::get('/product_2Fproduct_product_id=45', function () {
    return view('product_2Fproduct_product_id=45');
});

Route::get('/product_2Fproduct_product_id=46', function () {
    return view('product_2Fproduct_product_id=46');
});

Route::get('/product_2Fproduct_product_id=47', function () {
    return view('product_2Fproduct_product_id=47');
});

Route::get('/product_2Fproduct_product_id=48', function () {
    return view('product_2Fproduct_product_id=48');
});

Route::get('/product_2Fproduct_product_id=49', function () {
    return view('product_2Fproduct_product_id=49');
});

Route::get('/product_2Fsearch', function () {
    return view('product_2Fsearch');
});
Route::get('/product_2Fspecial', function () {
    return view('product_2Fspecial');
});
