<?php
namespace App\Livewire;

use App\Mail\formmail;
use Throwable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contactform extends Component
{
    public $nama;
    public $NIK;
    public $alamat;
    public $telepon;
    public $email;

    protected $rules = [
        'nama' => 'required|string|max:255',
        'NIK' => 'required|string|max:16',
        'alamat' => 'required|string|max:255',
        'telepon' => 'required|numeric',
        'email' => 'required|email|max:255',
    ];


    public function resetForm()
    {
        $this->nama = '';
        $this->NIK = '';
        $this->alamat = '';
        $this->telepon = '';
        $this->email = '';
    }

    protected $messages = [
        'NIK.max' => 'NIK tidak boleh lebih dari 16 karakter.',
        'email.required' => 'Email wajib diisi.',
    ];
        public function render()
    {
        return view('livewire.contactform');
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function send()
    {
        $validatedData = $this->validate();

        // Kirim email
        try {
            Mail::to('support@domain.com')->send(New formMail($validatedData));
            session()->flash('success', 'Data berhasil dikirim!');
        } catch (Throwable $th) {
            session()->flash('error', 'Gagal mengirim Data. Silakan coba lagi nanti.');
        }

        $this->resetForm();
    }
}
