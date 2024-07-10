<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function queryBuilder(){
        //1. Lấy danh sách toàn bộ user
        // $result=DB::table('users')->get();

        //2. lấy thông tin có use =4
        // $result=DB::table('users')
        // ->where('id','=','4')
        // ->first();

        // cách 2   
        // $result=DB::table('users')->find('4'); //chỉ dùng với id

        //3. Lấy thuộc tính 'name' của users có id = 16
        // $result=DB::table('users')->where('id','=','16')->value('name');

        //4. Lấy danh sách idUser của phòng ban 'Ban giám hiệu'
        // $idPhongBan=DB::table('phongban')->where('ten_donvi','like','Ban giám hiệu')->value('id');
        // $result=DB::table('users')->where('phongban_id',$idPhongBan)->pluck('id');

        //5. Tìm user có độ tuổi lớn nhất trong công ty 
        // $result=DB::table('users')->where('tuoi',DB::table('users')->max('tuoi'))->get();

        //6  6. Tìm user có độ tuổi nhỏ nhất trong công ty
        // $result=DB::table('users')->where('tuoi', DB::table('users')->min('tuoi'))->get();
        

        // 7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user
        // $idPhongBan=DB::table('phongban')->where('ten_donvi','like','Ban giám hiệu')->value('id');
        // $result=DB::table('users')->where('phongban_id',$idPhongBan)->count();

        //8. Lấy danh sách tuổi các user 
        // $result=DB::table('users')->distinct()->pluck('tuoi');

        // 9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
        //$result=DB::table('users')->where('name','like','%Khải')->orwhere('name','like','%Thanh')->get();


        // 10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
        $idPhongBan=DB::table('phongban')->where('ten_donvi','like','Ban đào tạo')->value('id');
        $result=DB::table('users')->where('phongban_id',$idPhongBan)->select('id','name','email')->get();



        dd($result);
    }
}
