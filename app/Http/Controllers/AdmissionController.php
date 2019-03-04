<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class AdmissionController extends Controller
{
    public function index(){
      return view('admission.index');
    }

    public function save(Request $request)
    {
      $data = $request->all();

      $lead = new Lead;
      $lead->name = $data['name'];
      $lead->email = $data['email'];
      $lead->message = $data['message'];

      $lead->save();

      $message = 'messaggio inserito';

      // Mail::to($request->user())->send(new OrderShipped($order)); al posto di ordershipped ci va il nome della classe che abbiamo dato alla mail cioe SendMail
      Mail::to('davide@prova')->send(new SendMail($lead));
      //al posto di quella mail potremmo inviare la mail dell admin del sito (o a piu indirizzi admin mettendo un array) ed una al cliente che ha inviato il messaggio (magari per conferma o per marketing) basterà semplicemente scrivere un'altra Mail::to($data['email'])-send(new nomemail());


      return view('admission.index', compact('message'));
    }
}
