<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\RegisterPostRequest;
use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\Contact;
use App\Mail\ContactFormMail;



class ContactUsFormController extends Controller {
    // Contact Formu
    public function createForm(Request $request) {
      return view('contact');
    }
    // Dataya Kaydetme Function ı
    public function ContactUsForm(ContactRequest $request) {

        // Form
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);

         Contact::create($request->all());
         return redirect()->route('login')->with('success', 'Mesajınız başarıyla gönderildi.');
    }
    public function messages()
    {
        if (Auth::id()==null) {
            return redirect()->route('404')->with('', '');
        }
        $message=Contact::orderBy('name')->get();
        return view('messages',compact('message'));
    }
    public function contactDelete(Request $request)
    {
        if (Auth::id()==null) {
            return redirect()->route('404')->with('', '');
        }
        $message = Contact::whereId($request->id)->first();
        if ($message) {
            $message->delete();
            return redirect()->route('messages')->with('success', 'Mesaj Silindi');
        } else {
            return redirect()->route('messages')->with('error', 'Mesaj bulunamadı');
        }
    }
    public function sendEmail(Request $request)
{
    if (Auth::id()==null) {
        return redirect()->route('404')->with('', '');
    }
    $data = array(
        'name' => $request->name,
        'email' => $request->input('email'),
        'message' => $request->message
    );

    Mail::to($request->input('email'))->send(new ContactFormMail($data));

    return redirect()->route('messages')->with('success', 'Mesaj Gönderilmiştir');
}

public function reply($id)
{
    if (Auth::id()==null) {
        return redirect()->route('404')->with('', '');
    }
    $contact = Contact::find($id);

    return view('modals.contactReplyModal', compact('contact'));

}
}
