<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\ContactMail;

class ContactsController extends Controller
{
    //

    public function index(){

    }

    public function faq(){
        return view('faq01');
    }

    public function comment(){
        return view('comment01');
    }

    public function contact(){
        return view('contact01');
        
    }
   

    public function confirm(Request $request){
        /*
        $request->validate([
            'name'=>'required|max:10',
            'email'=>'required|email',
            'tel'=>'nullable|numeric',
            'contents'=>'nullable|max:255', 
        ]);

        $inputs=$request->all();

        return view('confirm',['inputs'=>$inputs]);
        */

         //POSTして送られてきたチェックボックスの状態を整数の収める
         $chk=$request->input('chk');
         if($chk=="作品掲載の依頼に関するお問い合わせ"){
             $chk=1;
         }
         if($chk=="掲載中の作品に関する問い合わせ"){
             $chk=2;
         }
         if($chk=="その他"){
             $chk=3;
         }
 
         //POST投稿内容の受け取って変数に入れる
         //echo $request->input('chk');
         //echo $request->input('content');
         //echo $request->input('name');
 
         $name=$request->input('name');
         $company=$request->input('company');
         $tel=$request->input('tel');
         $mail=$request->input('mail');
         //$chk=$request->input('chk');
         $content=$request->input('content');

        //変数をビューに渡す
        return view('confirm01')->with([
            "name"=>$name,
            "company"=>$company,
            "tel"=>$tel,
            "mail"=>$mail,
            "chk"=>$chk,
            "content"=>$content,
        ]);

    }

    public function send_action(Request $request){
    }
   

    public function complete(Request $request){
        /*
        //POSTして送られてきたチェックボックスの状態を整数の収める
        $chk=Request::input('chk');
        if($chk=="作品掲載の依頼に関するお問い合わせ"){
            $chk=1;
        }
        if($chk=="掲載中の作品に関する問い合わせ"){
            $chk=2;
        }
        if($chk=="その他"){
            $chk=3;
        }

        $name=Request::input('name');
        $company=Request::input('company');
        $tel=Request::input('tel');
        $mail=Request::input('mail');
        //$chk=$request->input('chk');
        $content=Request::input('content');
        
        //変数をビューに渡す
        return view('complete')->with([
            "name"=>$name,
            "company"=>$company,
            "tel"=>$tel,
            "mail"=>$mail,
            "chk"=>$chk,
            "content"=>$content,
        ]);
        */

        $contact=$request->all();

        $admin_mail='sfujimura2@gmail.com';

        //登録者へメール送信
        //Mail::to($contact['mail'])->send(new ContactMail('mails.contact','公文協テストメール_お問い合わせありがとうございます',$contact));

        //管理者へメール送信
        //Mail::to($admin_mail)->send(new ContactMail('mails.contact','Test_登録者より以下のメールが届きました',$contact));

        return view('complete01');
        

    }
}
