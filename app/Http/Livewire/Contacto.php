<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class Contacto extends Component
{

    public $name;
    public $email;
    public $telefono;
    public $msg;

    public function render()
    {
        return view('livewire.contacto');
    }

    function send_contact()
    {
        $name = $this->name;
        $email = $this->email;
        $telefono = $this->telefono;
        $msg = $this->msg;

        if(empty($name) OR empty($email) OR empty($telefono) OR empty($msg)){
            $this->dispatchBrowserEvent("inputs_empty");
            return false;
        }

        // ? generar email

        $correo = new ContactoMailable($name, $email, $telefono, $msg);
        Mail::to("luis.olave.carvajal@gmail.com")->send($correo);
        $this->reset(["name", "email", "telefono", "msg"]);
        $this->dispatchBrowserEvent("ok_send");
    }



}
