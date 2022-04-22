<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Jobs\MatchSendEmail;
use App\Jobs\MatchSendAdminEmail;
use App\Jobs\SendCertificateAll;
use App\Jobs\SendCertificate;
use App\Exports\RegistrationExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Mail;

class HomeController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function register(){
        return view('pages.register');
    }

    public function registration(Request $req){
        

        $validator = $req->validate([
            'name' => 'required|string|regex:/^[a-zA-Z\s]*$/',
            'email' => 'required|email',
            'phone' => 'required|integer|regex:/^(\+91)[6-9]\d{9}$/',
            'cname' => 'required|regex:/^[a-zA-Z\s]*$/',
            'cnumber' => 'required|integer|regex:/^(\+91)[6-9]\d{9}$/',
            'address' => 'required|regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i',
            'check' => 'required',
        ],
        [
            'name.required' => 'Please enter your name !',
            'name.string' => 'Please enter your valid name !',
            'name.regex' => 'Please enter your valid name !',
            'email.required' => 'Please enter your email !',
            'email.email' => 'Please enter a valid email',
            'phone.required' => 'Please enter your phone !',
            'phone.integer' => 'Please enter a valid phone',
            'phone.regex' => 'Please enter a valid phone',
            'cname.regex' => 'Please enter your valid emergency contact name !',
            'cname.required' => 'Please enter your emergency contact name !',
            'cnumber.required' => 'Please enter your emergency contact number !',
            'cnumber.integer' => 'Please enter a valid emergency contact number',
            'cnumber.regex' => 'Please enter a valid emergency contact number',
            'address.required' => 'Please enter your address !',
            'address.regex' => 'Please enter your valid address !',
            'check.required' => 'Please agree to the terms & conditions !',
        ]);

        $registerCount = Registration::where('email',$req->email)->get();
        if(count($registerCount)>0){
            $registerUser = Registration::where('email',$req->email)->first();
            return redirect()->intended('thank-you/'.$registerUser->id)->with('success', 'Already a Registered User')->with('Registered', 'Already a Registered User');
        }
	$registerCount = Registration::get();
        if(count($registerCount)>0){
            $lastUser = Registration::latest()->first();
            $lastBib = $lastUser->bib + 1;
        }else{
            $lastBib = 1000;
        }
        $register = New Registration;
        $register->name = $req->name;
        $register->email = $req->email;
        $register->phone = $req->phone;
        $register->cname = $req->cname;
        $register->cnumber = $req->cnumber;
        $register->address = $req->address;
	$register->bib = $lastBib;
        $register->save();

        $emailJob = new MatchSendEmail($register);
        dispatch($emailJob);
        // $emailAdminJob = new MatchSendAdminEmail($register);
        // dispatch($emailAdminJob);

        return redirect()->intended('thank-you/'.$register->id)->with('success', 'Registered Successfully');
    }

    public function thank($id){
        $registerUser = Registration::findOrFail($id);
        return view('pages.thank')->with('user', $registerUser);
    }

	public function registration_details(){
        // $data = Registration::all();
        // (new FastExcel($datas))->export('file.xlsx');
        $data = Registration::orderBy('id', 'DESC')->paginate(10);
        return view('pages.detail')->with('data', $data);
    }

    public function excel(){
        return Excel::download(new RegistrationExport, 'registration.xlsx');
        return redirect()->intended('admin/detail')->with('success', 'Sent Successfully');
    }

    public function send_certificate(){
        $registration = Registration::all();
        foreach($registration as $register){
            $data = [
                'name' => $register->name,
                'font' => strlen($register->name) > 17 ? 18 : 25,
            ];
              
            $pdf = PDF::loadView('pdf.myPDF', $data)->setPaper('a4', 'landscape');
            $pdf->save('admin/certificate/'.$register->name.'-'.$register->bib.'.pdf');
        }
        $emailJob = new SendCertificateAll($registration);
        dispatch($emailJob);
        return redirect()->intended('admin/detail')->with('success', 'Sent Successfully');
    }

    public function send_certificate_single($id){
        $regCount = Registration::where('id',$id)->get();
        if(count($regCount)==0){
            return redirect()->intended('admin/detail')->with('error', 'Invalid ID');
        }
        $register = Registration::where('id',$id)->first();
        $data = [
            'name' => $register->name,
            'font' => strlen($register->name) > 17 ? 22 : 30,
        ];
          
        $pdf = PDF::loadView('pdf.myPDF', $data)->setPaper('a4', 'landscape');
        $pdf->save('admin/certificate/'.$register->name.'-'.$register->bib.'.pdf');
        // return $pdf->download($register->name.'-'.$register->bib.'.pdf');
        $emailJob = new SendCertificate($register);
        dispatch($emailJob);
        return redirect()->intended('admin/detail')->with('success', 'Sent Successfully');
    }

    public function send_certificate_user($id){
        $regCount = Registration::where('id',$id)->get();
        if(count($regCount)==0){
            return redirect()->intended('result')->with('error', 'Invalid ID');
        }
        $register = Registration::where('id',$id)->first();
        $data = [
            'name' => $register->name,
            'font' => strlen($register->name) > 17 ? 22 : 30,
        ];
          
        $pdf = PDF::loadView('pdf.myPDF', $data)->setPaper('a4', 'landscape');
        $pdf->save('admin/certificate/'.$register->name.'-'.$register->bib.'.pdf');
        // return $pdf->download($register->name.'-'.$register->bib.'.pdf');
        $emailJob = new SendCertificate($register);
        dispatch($emailJob);
        return redirect()->intended('result')->with('success', 'Email Sent Successfully');
    }

    public function send_certificate_download($id){
        $regCount = Registration::where('id',$id)->get();
        if(count($regCount)==0){
            return redirect()->intended('result')->with('error', 'Invalid ID');
        }
        $register = Registration::where('id',$id)->first();
        $data = [
            'name' => $register->name,
            'font' => strlen($register->name) > 17 ? 22 : 30,
        ];
          
        $pdf = PDF::loadView('pdf.myPDF', $data)->setPaper('a4', 'landscape');
        return $pdf->download($register->name.'-'.$register->bib.'.pdf');
    }

    public function result(){
        return view('pages.reslt');
    }

    public function generate_result(Request $req){
        $validator = $req->validate([
            'name' => 'required',
        ],
        [
            'name.required' => 'Please enter your email or E-BIB !',
        ]);
        $regCount = Registration::where('email',$req->name)->orWhere('bib',$req->name)->get();
        if(count($regCount)==0){
            return redirect()->intended('result')->with('error', 'The entered data is invalid');
        }else{
            return redirect()->intended('result')->with('success', 'Data Recieved Successfully')->with('success_data', Registration::where('email',$req->name)->orWhere('bib',$req->name)->first());
        }
    }

}
