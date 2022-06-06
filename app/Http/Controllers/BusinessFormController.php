<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PincodeModel;
use App\Models\User;
use App\Models\Customer;
use App\Models\Order;
use App\Models\UserPlanLog;
use Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ArrayOfObjects;
use Session;
class BusinessFormController extends Controller
{
    public function index()
    {
        return view('business_form');
    }
    public function formSubmit(Request $request)
    {
        $data = collect($request->all())->pluck('value','name')->toArray();
       
        $orderTotal = $data['order_total'];
        $orderDueTotal = $data['due_order_total'];

        Session::put('orderTotal',$orderTotal);
        Session::put('orderDueTotal',$orderDueTotal);
        Session::put('customerName',$data['title'].$data['fname'].$data['lname']);
        Session::put('customerEmail',$data['email1']);
        Session::put('Line',$data['add1']);
        Session::put('City',$data['city']);
        Session::put('Postcode',$data['pcode']);
        
         $validated = Validator::make($data,[
            'email1' => ['required','unique:users,email'],
            'broadband_plan' =>['required'],
        ],[
            'email1.required' => 'Email in the billing section is required',
            'email1.unique' => 'This Email has already taken. If you have any queries,
             Please submit your request at Enquery form',
            'broadband_plan.required'=> 'Broadband plan is required',
        ]);
        $validator = $validated->validate();
        if (!$validator) {
            return response()->json([ 'error' => $validator->errors()->all() ]);
        } 
        else{
        //dd(json_decode($data['all_order_details']));
        /*JSON.parse(json_str)*/
        /*{"current_service_provider":"","number_wish_to_transfer":"","address_wish_to_transfer":"","preferred_transfer_date":"","asap":0,"transfer_second_number":0}*/
         $transerNoDetails = [
             'current_service_provider' => $data['cur_service_provdr'] ? $data['cur_service_provdr'] : "",
             'number_wish_to_transfer' => $data['what_no_wish_to_transfer'] ? $data['what_no_wish_to_transfer'] : "",
             'address_wish_to_transfer' => $data['what_addr_wish_to_transfer'] ? $data['what_addr_wish_to_transfer'] : "",
             'preferred_transfer_date' => $data['preferred_transfer_date'] ? $data['preferred_transfer_date'] : "",
             'transfer_second_number' => $data['transfer_second_no'] ? $data['transfer_second_no'] : "",
             'asap' => 0,
         ];
         /*$transerNoDetails=[];
         if(isset($data['cur_service_provdr']))$transerNoDetails['cur_service_provdr']=$data['cur_service_provdr'];
         if(isset($data['what_no_wish_to_transfer']))$transerNoDetails['what_no_wish_to_transfer']=$data['what_no_wish_to_transfer'];
         if(isset($data['what_addr_wish_to_transfer']))$transerNoDetails['what_addr_wish_to_transfer']=$data['what_addr_wish_to_transfer'];
         if(isset($data['preferred_transfer_date']))$transerNoDetails['preferred_transfer_date']=$data['preferred_transfer_date'];
         if(isset($data['transfer_second_no']))$transerNoDetails['transfer_second_no']=$data['transfer_second_no'];*/
         
 
         $transferNo = (isset($data['transfer_number']) ) == "yes" ? 1 : 0;
        
         $vulnerabilities = (isset($data['vulnerabilities']) ) == "yes" ? 1 : 0;
         $battery_bkp = (isset($data['battery_bkp']) ) == "yes" ? 1 : 0;
         $router_delivery_address = $data['router_delivery_address'] == "yes" ? 1 : 0;
         $billing_diff_address_1 = $data['billing_diff_address_1'] == "yes" ? 1 : 0;
         
         
     
 
         /*$routerExtra = [
             (isset($data['router_extraT']) ) ? $data['router_extraT'] : "",
             (isset($data['router_extraAL']) ) ? $data['router_extraAL'] : "",
             (isset($data['router_extraAC']) ) ? $data['router_extraAC'] : "",
             (isset($data['router_extraL']) ) ? $data['router_extraL'] : "",
             (isset($data['router_extraW']) ) ? $data['router_extraW'] : "",
             (isset($data['router_extraD']) ) ? $data['router_extraD'] : "",
             (isset($data['router_extraB']) ) ? $data['router_extraB'] : ""
         ];*/
         $routerExtra=[];
         if(isset($data['router_extraT']))array_push($routerExtra,$data['router_extraT']);
         if(isset($data['router_extraAL']))array_push($routerExtra,$data['router_extraAL']);
         if(isset($data['router_extraAC']))array_push($routerExtra,$data['router_extraAC']);
         if(isset($data['router_extraL']))array_push($routerExtra,$data['router_extraL']);
         if(isset($data['router_extraW']))array_push($routerExtra,$data['router_extraW']);
         if(isset($data['router_extraD']))array_push($routerExtra,$data['router_extraD']);
         if(isset($data['router_extraB']))array_push($routerExtra,$data['router_extraB']);
         
       //  dd(implode ("| ", $routerExtra));
         /*$managedRouter = [
             (isset($data['managed_router']) ) ? $data['managed_router'] : "",
             (isset($data['remote_it']) ) ? $data['remote_it'] : ""
         ];*/
         $managedRouter=[];
         if(isset($data['managed_router']))array_push($managedRouter,$data['managed_router']);
         if(isset($data['remote_it']))array_push($managedRouter,$data['remote_it']);
         
 
         /*$newCommEvent = [
             (isset($data['phone']) ) ? $data['phone'] : "",
             (isset($data['email']) ) ? $data['email'] : "",
             (isset($data['post']) ) ? $data['post'] : "",
             (isset($data['text']) ) ? $data['text'] : "",
             (isset($data['none']) ) ? $data['none'] : ""
         ];*/
         $newCommEvent=[];
         if(isset($data['phone']))array_push($newCommEvent,$data['phone']);
         if(isset($data['email']))array_push($newCommEvent,$data['email']);
         if(isset($data['post']))array_push($newCommEvent,$data['post']);
         if(isset($data['text']))array_push($newCommEvent,$data['text']);
         if(isset($data['none']))array_push($newCommEvent,$data['none']);
 
        /* $marketingEvent = [
             (isset($data['Mphone']) ) ? $data['Mphone'] : "",
             (isset($data['Memail']) ) ? $data['Memail'] : "",
             (isset($data['Mpost']) ) ? $data['Mpost'] : "",
             (isset($data['Mtext']) ) ? $data['Mtext'] : "",
             (isset($data['Mnone']) ) ? $data['Mnone'] : ""
         ];*/
         $marketingEvent=[];
         if(isset($data['Mphone']))array_push($marketingEvent,$data['Mphone']);
         if(isset($data['Memail']))array_push($marketingEvent,$data['Memail']);
         if(isset($data['Mpost']))array_push($marketingEvent,$data['Mpost']);
         if(isset($data['Mtext']))array_push($marketingEvent,$data['Mtext']);
         if(isset($data['Mnone']))array_push($marketingEvent,$data['Mnone']);
         
 
         /*$installationAdd = [
             (isset($data['add1']) ) ? $data['add1'] : "",
             (isset($data['add2']) ) ? $data['add2'] : "",
             (isset($data['add3']) ) ? $data['add3'] : "",
             (isset($data['city']) ) ? $data['city'] : "",
             (isset($data['pcode']) ) ? $data['pcode'] : "",
         ];*/
         $installationAdd=[];
         if(isset($data['add1']))$installationAdd['address_line_1']=$data['add1'];
         if(isset($data['add2']))$installationAdd['address_line_2']=$data['add2'];
         if(isset($data['add3']))$installationAdd['address_line_3']=$data['add3'];
         if(isset($data['city']))$installationAdd['town']=$data['city'];
         if(isset($data['pcode']))$installationAdd['postcode']=$data['pcode'];
         
         
         /*$routerDelAddress = [
             (isset($data['router_addressline1']) ) ? $data['router_addressline1'] : "",
             (isset($data['router_addressline2']) ) ? $data['router_addressline2'] : "",
             (isset($data['router_addressline3']) ) ? $data['router_addressline3'] : "",
             (isset($data['router_town']) ) ? $data['router_town'] : "",
             (isset($data['router_postcode']) ) ? $data['router_postcode'] : "",
         ];*/
         $routerDelAddress=[];
         if($router_delivery_address==0){
             if(isset($data['add1']))$routerDelAddress['address_line_1']=$data['add1'];
             if(isset($data['add2']))$routerDelAddress['address_line_2']=$data['add2'];
             if(isset($data['add3']))$routerDelAddress['address_line_3']=$data['add3'];
             if(isset($data['city']))$routerDelAddress['town']=$data['city'];
             if(isset($data['pcode']))$routerDelAddress['postcode']=$data['pcode'];
         }else{
             if(isset($data['router_addressline1']))$routerDelAddress['address_line_1']=$data['router_addressline1'];
             if(isset($data['router_addressline2']))$routerDelAddress['address_line_2']=$data['router_addressline2'];
             if(isset($data['router_addressline3']))$routerDelAddress['address_line_3']=$data['router_addressline3'];
             if(isset($data['router_town']))$routerDelAddress['town']=$data['router_town'];
             if(isset($data['router_postcode']))$routerDelAddress['postcode']=$data['router_postcode'];   
         }
         
 
        /* $billingAddress = [
             (isset($data['billing_addressline1']) ) ? $data['billing_addressline1'] : "",
             (isset($data['billing_addressline2']) ) ? $data['billing_addressline2'] : "",
             (isset($data['billing_addressline3']) ) ? $data['billing_addressline3'] : "",
             (isset($data['billing_town']) ) ? $data['billing_town'] : "",
             (isset($data['billing_postcode']) ) ? $data['billing_postcode'] : "",
         ];*/
         $billingAddress=[];
         if($billing_diff_address_1==0){
             if(isset($data['add1']))$billingAddress['address_line_1']=$data['add1'];
             if(isset($data['add2']))$billingAddress['address_line_2']=$data['add2'];
             if(isset($data['add3']))$billingAddress['address_line_3']=$data['add3'];
             if(isset($data['city']))$billingAddress['town']=$data['city'];
             if(isset($data['pcode']))$billingAddress['postcode']=$data['pcode'];
         }else{
             if(isset($data['billing_addressline1']))$billingAddress['address_line_1']=$data['billing_addressline1'];
             if(isset($data['billing_addressline2']))$billingAddress['address_line_2']=$data['billing_addressline2'];
             if(isset($data['billing_addressline3']))$billingAddress['address_line_3']=$data['billing_addressline3'];
             if(isset($data['billing_town']))$billingAddress['town']=$data['billing_town'];
             if(isset($data['billing_postcode']))$billingAddress['postcode']=$data['billing_postcode'];
         }
         
 
         /*$terms = [
             (isset($data['terms1']) ) ? $data['terms1'] : "",
             (isset($data['terms2']) ) ? $data['terms2'] : "",
             (isset($data['terms3']) ) ? $data['terms3'] : "",
         ];*/
         $terms=[];
         /*{"accept_terms":"yes","accept_initial_contract":"yes","initial_contractlength":"12","accept_privacy_policy":"yes"}*/
         $terms['accept_terms']=isset($data['terms1'])?$data['terms1']=="on"?'yes':'no':'yes';
         $terms['accept_initial_contract']=isset($data['terms2'])?$data['terms2']=="on"?'yes':'no':'yes';
         $terms['initial_contractlength']=isset($data['initial_contractlength'])?$data['initial_contractlength']:'';
         $terms['accept_privacy_policy']=isset($data['terms3'])?$data['terms3']=="on"?'yes':'no':'yes';
         
         /*if(isset($data['terms1']))array_push($terms,$data['terms1']);
         if(isset($data['terms2']))array_push($terms,$data['terms2']);
         if(isset($data['terms3']))array_push($terms,$data['terms3']);*/
            
         
             
            // dd(trim($data['routertype'],'"'), str_replace('"', '',$data['routertype']));
         $user= User::create([
             'name'=> (isset($data['fname'])) ? $data['fname'] : "",
             'email'=> (isset($data['email1'])) ? $data['email1'] : "",
             'user_level'=> "c",
             'status'=>1,
             'password'=>'12345'
             ]);
             
             //print($user->id);return;   
         
         $customer = Customer::create([
             'uid' => $user->id,
             'unique_id' => "",
             'title' => (isset($data['title'])) ? $data['title'] : "",
             'fname' => (isset($data['fname']) ) ? $data['fname'] : "",
             'lname' => (isset($data['lname']) ) ? $data['lname'] : "",
             'email' => (isset($data['email1']) ) ? $data['email1'] : "",
             'phone' => (isset($data['phone1'])) ? $data['phone1'] : "",
             'alt_email' => "",
             'alt_phone1' => "",
             'alt_phone2' => "",
             'installation_address' => (!empty($installationAdd))?$installationAdd:null,
             'router_delivery' => $router_delivery_address,
             'router_delivery_address' => (!empty($routerDelAddress))?$routerDelAddress:null,
             'billing_different' => $billing_diff_address_1,
             'billing_different_address' => (!empty($billingAddress))?$billingAddress:null,
             'activation_date' => (isset($data['acvdate']) ) ? $data['acvdate'] : "",
             'debit_date' => (isset($data['debit_date'])) ? $data['debit_date'] : "",
             'billing_notes' => (isset($data['billing_notes'])) ? $data['billing_notes'] : "",
             'status' => 1
         ]);
         //dd($user);
         $order = Order::create([
             'cid' => $customer->id,
             'connection_type' => 'home',
             'postcode_id' => '1234',
             'postcode' => (isset($data['postcode']) ) ? $data['postcode'] : "",
             'postcode_address' => "",
             'connection' => (isset($data['connection']) ) ? $data['connection'] : "",
             'broadband_plan' => (isset($data['broadband_plan']) ) ? $data['broadband_plan'] : "",
             'voice_package' => (isset($data['voice_package']) ) ? $data['voice_package'] : "",
             'router_requirement' => (isset($data['routertype']) ) ? $data['routertype'] : null,
             'extra_router' => (!empty($routerExtra))?implode("|", $routerExtra):null,
             'managed_router' =>(!empty($managedRouter))?implode("|", $managedRouter):null,
             'news_community' => (!empty($newCommEvent))?$newCommEvent:null,
             'marketing_community' => (!empty($marketingEvent))?$marketingEvent:null,
             'vulnerabilities' => $vulnerabilities,
             'vulnerabilities_details' => (isset($data['vulnerabilities_details']) ) ? $data['vulnerabilities_details'] : "",
             'battery_backup' => $battery_bkp,
             'transfer_number' => $transferNo,
             'transfer_number_details' => (!empty($transerNoDetails))?$transerNoDetails:null,
             'terms_acceptance' => (!empty($terms))?$terms:null,
             'order_details' => (isset($data['all_order_details']) ) ? json_decode($data['all_order_details']) : null,
             'status' => 1,
             // 'migration_date' => (isset($data['migration_date']) ) ? $data['migration_date'] : "",
             'order_total' => $orderTotal,
             'due_order_total' => $orderDueTotal,
             'due_order_details' => (isset($data['due_order_details']) ) ? json_decode($data['due_order_details']) : null,

         ]);
         
       
         //Store Broadband Plan
         $user_plan_logs=UserPlanLog::create([
             'user_id' => $user->id,
             'customer_id'=>$customer->id,
             'plan_name'=>(isset($data['broadband_plan']) ) ? $data['broadband_plan']:'None',
             'plan_type'=>(isset($data['broadband_plan']) ) ? 'broadband':null,
             'added_from'=>'website',
             'added_by'=>$user->id,
             'activation_date'=>(isset($data['acvdate']) ) ? $data['acvdate'] : ""
             ]);
             
         //Store Voice Plan
         $user_plan_logs=UserPlanLog::create([
             'user_id' => $user->id,
             'customer_id'=>$customer->id,
             'plan_name'=>(isset($data['voice_package']) ) ? $data['voice_package']:'None',
             'plan_type'=>(isset($data['voice_package']) ) ? 'voice':null,
             'added_from'=>'website',
             'added_by'=>$user->id,
             'activation_date'=>(isset($data['acvdate']) ) ? $data['acvdate'] : ""
             ]);
         
     
             
          return response()->json(['success' => 'Your Order has been placed!']);


            }
    }
}
