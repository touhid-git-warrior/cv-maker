<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use App\Models\CvInfo;
use App\Models\CvMoreInfo;
use Auth;


class CvGeneratorController extends Controller
{
    public function ViewFirstCv(){

        $id = Auth::guard('web')->user()->id;

        $CvInfo = CvInfo::where('user_id',$id)->first();

        $CvMoreInfo = CvMoreInfo::where('user_id',$id)->first();


          // $pdf = PDF::loadView('frontend.pdf',compact('order'));
          // return $pdf->download('invoice.pdf');
           // return $pdf->stream();

           return view('frontend.cvdesign.cvdesign1',compact('CvInfo','CvMoreInfo'));

    }

    public function CvinfoAdd(){

        $id = Auth::guard('web')->user()->id;

        $checkUserId = CvInfo::where('user_id',$id)->count();

        if ($checkUserId > 0) {
            
            return redirect()->route('dashboard')->with(['key'=>'600']);
        }

        return view('frontend.component.cvinfoview');
    }

    public function CvinfoSave(Request $request){

        $checkUserId = CvInfo::where('user_id',$request->user_id)->count();

        if ($checkUserId > 0) {
            
            return redirect()->route('dashboard')->with(['key'=>'600']);
        }

        if($request->file('cv_image') != ''){

            $file = $request->file('cv_image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('upload/cv_images'),$fileName);
            $image_path = 'upload/cv_images/'.$fileName;

        }else{

             $image_path = null;
        }

       $CvinfoId =  CvInfo::insertGetId([

        'name'=>$request->name,
        'cv_image'=>$image_path,
        'user_id'=>$request->user_id,
        'designation'=>$request->designation,
        'address1'=>$request->address1,
        'address2'=>$request->address2,
        'address3'=>$request->address3,
        'address4'=>$request->address4,
        'phone1'=>$request->phone1,
        'phone2'=>$request->phone2,
        'email'=>$request->email,
        'website_link'=>$request->website_link,
        'html'=>$request->html,
        'css'=>$request->css,
        'sass'=>$request->sass,
        'js'=>$request->js,
        'jquery'=>$request->jquery,
        'react'=>$request->react,
        'angular'=>$request->angular,
        'vue'=>$request->vue,
        'php'=>$request->php,
        'aws'=>$request->aws,
        'ai'=>$request->ai,
        'machine_learning'=>$request->input('machine_learning'),
        'ms_word'=>$request->ms_word,
        'ms_excel'=>$request->ms_excel,
        'adobe_photoshop'=>$request->input('adobe_photoshop'),
        'adobe_xd'=>$request->input('adobe_xd'),
        'facebook1'=>$request->facebook1,
        'facebook1'=>$request->facebook1,
        'twitter1'=>$request->twitter1,
        'twitter2'=>$request->twitter2,
        'youtube'=>$request->youtube,
        'linkedin'=>$request->linkedin,
        'pinterest'=>$request->pinterest,
        'about_you'=>$request->about_you,
        ]);

        if($request->exp1 != null && $request->exp2 != null){
            $exp_year1 = $request->exp1.' - '.$request->exp2;
        }else{
            $exp_year1 = null;
        }

        if($request->exp3 != null && $request->exp4 != null){
            $exp_year2 = $request->exp3.' - '.$request->exp4;
        }else{
            $exp_year2 = null;
        }

        if($request->exp5 != null && $request->exp6 != null){
            $exp_year3 = $request->exp5.' - '.$request->exp6;
        }else{
            $exp_year3 = null;
        }

        if($request->exp7 != null && $request->exp8 != null){
            $exp_year4 = $request->exp7.' - '.$request->exp8;
        }else{
            $exp_year4 = null;
        }

        if($request->exp9 != null && $request->exp10 != null){
            $exp_year5 = $request->exp9.' - '.$request->exp10;
        }else{
            $exp_year5 = null;
        }


        // education layer

         if($request->edu1 != null && $request->edu2 != null){
            $edu_year1 = $request->edu1.' - '.$request->edu2;
        }else{
            $edu_year1 = null;
        }

         if($request->edu3 != null && $request->edu4 != null){
            $edu_year2 = $request->edu3.' - '.$request->edu4;
        }else{
            $edu_year2 = null;
        }

         if($request->edu5 != null && $request->edu6 != null){
            $edu_year3 = $request->edu5.' - '.$request->edu6;
        }else{
            $edu_year3 = null;
        }

         if($request->edu7 != null && $request->edu8 != null){
            $edu_year4 = $request->edu7.' - '.$request->edu8;
        }else{
            $edu_year4 = null;
        }

         if($request->edu9 != null && $request->edu10 != null){
            $edu_year5 = $request->edu9.' - '.$request->edu10;
        }else{
            $edu_year5 = null;
        }

        // end

      

       $cvmoreinfo =  CvMoreInfo::insert([

        'cvinfo_id'=>$CvinfoId,
        'user_id'=>$request->user_id,
        'exp_year1'=>$exp_year1,
        'company_name1'=>$request->company_name1,
        'about_exp1'=>$request->about_exp1,
        'exp_year2'=>$exp_year2,
        'company_name2'=>$request->company_name2,
        'about_exp2'=>$request->about_exp2,
        'exp_year3'=>$exp_year3,
        'company_name3'=>$request->company_name3,
        'about_exp3'=>$request->about_exp3,
        'exp_year4'=>$exp_year4,
        'company_name4'=>$request->company_name4,
        'about_exp4'=>$request->about_exp4,
        'exp_year5'=>$exp_year5,
        'company_name5'=>$request->company_name5,
        'about_exp5'=>$request->about_exp5,
        'edu_year1'=>$edu_year1,
        'inst_name1'=>$request->inst_name1,
        'about_edu1'=>$request->about_edu1,
        'edu_year2'=>$edu_year2,
        'inst_name2'=>$request->inst_name2,
        'about_edu3'=>$request->about_edu3,
        'edu_year3'=>$edu_year3,
        'inst_name3'=>$request->inst_name3,
        'about_edu3'=>$request->about_edu3,
        'edu_year4'=>$edu_year4,
        'inst_name4'=>$request->inst_name4,
        'about_edu4'=>$request->about_edu4,
        'edu_year5'=>$edu_year5,
        'inst_name5'=>$request->inst_name5,
        'about_edu5'=>$request->about_edu5,
        'hobby1'=>$request->hobby1,
        'hobby2'=>$request->hobby2,
        'hobby3'=>$request->hobby3,
        'hobby4'=>$request->hobby4,
        'hobby5'=>$request->hobby5,
        'hobby6'=>$request->hobby6,
        
       
       ]);

       if ($cvmoreinfo) {
           return redirect()->route('firstcv')->with(['key'=>200]);
       }
       


    }


    public function CvEdate(){

        


        $id = Auth::guard('web')->user()->id;

        $checkUserId = CvInfo::where('user_id',$id)->count();

        if ($checkUserId > 0) {

        $CvInfo = CvInfo::where('user_id',$id)->first();

        $CvMoreInfo = CvMoreInfo::where('user_id',$id)->first();

        return view('frontend.component.edatecv1',compact('CvInfo','CvMoreInfo'));
            
            
        }else{

            return redirect()->route('dashboard')->with(['key'=>'600']);
        }

       


    }


    public function CvUpdate(Request $request){

       

        $cvid = $request->cvinfo_id;
        $cvmoreid = $request->cvmoreinfo_id;

         $checkpreimg = CvInfo::where('id',$cvid)->select('cv_image')->first();


        if($request->file('cv_image') != ''){

            $file = $request->file('cv_image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('upload/cv_images'),$fileName);
            $image_path = 'upload/cv_images/'.$fileName;

            @unlink(public_path($checkpreimg->cv_image));


        }else{

             $image_path = $checkpreimg->cv_image;
        }


       $CvinfoId =  CvInfo::where('id',$cvid)->update([

        'name'=>$request->name,
        'cv_image'=>$image_path,
        'user_id'=>$request->user_id,
        'designation'=>$request->designation,
        'address1'=>$request->address1,
        'address2'=>$request->address2,
        'address3'=>$request->address3,
        'address4'=>$request->address4,
        'phone1'=>$request->phone1,
        'phone2'=>$request->phone2,
        'email'=>$request->email,
        'website_link'=>$request->website_link,
        'html'=>$request->html,
        'css'=>$request->css,
        'sass'=>$request->sass,
        'js'=>$request->js,
        'jquery'=>$request->jquery,
        'react'=>$request->react,
        'angular'=>$request->angular,
        'vue'=>$request->vue,
        'php'=>$request->php,
        'aws'=>$request->aws,
        'ai'=>$request->ai,
        'machine_learning'=>$request->input('machine_learning'),
        'ms_word'=>$request->ms_word,
        'ms_excel'=>$request->ms_excel,
        'adobe_photoshop'=>$request->input('adobe_photoshop'),
        'adobe_xd'=>$request->input('adobe_xd'),
        'facebook1'=>$request->facebook1,
        'facebook1'=>$request->facebook1,
        'twitter1'=>$request->twitter1,
        'twitter2'=>$request->twitter2,
        'youtube'=>$request->youtube,
        'linkedin'=>$request->linkedin,
        'pinterest'=>$request->pinterest,
        'about_you'=>$request->about_you,
        ]);

        if($request->exp1 != null && $request->exp2 != null){
            $exp_year1 = $request->exp1.' - '.$request->exp2;
        }else{
            $exp_year1 = null;
        }

        if($request->exp3 != null && $request->exp4 != null){
            $exp_year2 = $request->exp3.' - '.$request->exp4;
        }else{
            $exp_year2 = null;
        }

        if($request->exp5 != null && $request->exp6 != null){
            $exp_year3 = $request->exp5.' - '.$request->exp6;
        }else{
            $exp_year3 = null;
        }

        if($request->exp7 != null && $request->exp8 != null){
            $exp_year4 = $request->exp7.' - '.$request->exp8;
        }else{
            $exp_year4 = null;
        }

        if($request->exp9 != null && $request->exp10 != null){
            $exp_year5 = $request->exp9.' - '.$request->exp10;
        }else{
            $exp_year5 = null;
        }


        // education layer

         if($request->edu1 != null && $request->edu2 != null){
            $edu_year1 = $request->edu1.' - '.$request->edu2;
        }else{
            $edu_year1 = null;
        }

         if($request->edu3 != null && $request->edu4 != null){
            $edu_year2 = $request->edu3.' - '.$request->edu4;
        }else{
            $edu_year2 = null;
        }

         if($request->edu5 != null && $request->edu6 != null){
            $edu_year3 = $request->edu5.' - '.$request->edu6;
        }else{
            $edu_year3 = null;
        }

         if($request->edu7 != null && $request->edu8 != null){
            $edu_year4 = $request->edu7.' - '.$request->edu8;
        }else{
            $edu_year4 = null;
        }

         if($request->edu9 != null && $request->edu10 != null){
            $edu_year5 = $request->edu9.' - '.$request->edu10;
        }else{
            $edu_year5 = null;
        }

        // end

       $cvmoreinfo =  CvMoreInfo::where('id',$cvmoreid)->update([
        'exp_year1'=>$exp_year1,
        'company_name1'=>$request->company_name1,
        'about_exp1'=>$request->about_exp1,
        'exp_year2'=>$exp_year2,
        'company_name2'=>$request->company_name2,
        'about_exp2'=>$request->about_exp2,
        'exp_year3'=>$exp_year3,
        'company_name3'=>$request->company_name3,
        'about_exp3'=>$request->about_exp3,
        'exp_year4'=>$exp_year4,
        'company_name4'=>$request->company_name4,
        'about_exp4'=>$request->about_exp4,
        'exp_year5'=>$exp_year5,
        'company_name5'=>$request->company_name5,
        'about_exp5'=>$request->about_exp5,
        'edu_year1'=>$edu_year1,
        'inst_name1'=>$request->inst_name1,
        'about_edu1'=>$request->about_edu1,
        'edu_year2'=>$edu_year2,
        'inst_name2'=>$request->inst_name2,
        'about_edu3'=>$request->about_edu3,
        'edu_year3'=>$edu_year3,
        'inst_name3'=>$request->inst_name3,
        'about_edu3'=>$request->about_edu3,
        'edu_year4'=>$edu_year4,
        'inst_name4'=>$request->inst_name4,
        'about_edu4'=>$request->about_edu4,
        'edu_year5'=>$edu_year5,
        'inst_name5'=>$request->inst_name5,
        'about_edu5'=>$request->about_edu5,
        'hobby1'=>$request->hobby1,
        'hobby2'=>$request->hobby2,
        'hobby3'=>$request->hobby3,
        'hobby4'=>$request->hobby4,
        'hobby5'=>$request->hobby5,
        'hobby6'=>$request->hobby6,
        

       ]);

       if ($cvmoreinfo) {
           return redirect()->route('firstcv')->with(['key'=>300]);
       }
       


    }

    public function CvRemove(Request $request){


        $id = Auth::guard('web')->user()->id;

        $checkUserId = CvInfo::where('user_id',$id)->delete();

        $deleteCv = CvMoreInfo::where('user_id',$id)->delete();

         if ($deleteCv) {
           return redirect()->route('dashboard')->with(['key'=>410]);
       }


    }


}
