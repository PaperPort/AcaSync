<?php

namespace App\Livewire\User\Admin;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Workspace;
use Illuminate\Support\Facades\Http;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Flash\Flash;

#[Title('Info Workspace')]
class InfoWorkspace extends Component
{
    use WithFileUploads;
    public $view = 'index';
    public $shortID, $workspace_id;
    public $nama_workspace, $alamat, $email, $password, $password_confirmation, $profile, $profileUrl, $client;
    public $provinsi = [];
    public $kabupaten = [];
    public $selectedProvinsi = '';
    public $selectedKabupaten = '';

    protected $rules = [
        'nama_workspace'    => 'required|string|max:100',
        'email'             => 'required|email',
        'password'          => 'nullable|string|min:8|confirmed',
        'alamat'            => 'required|string',
        'selectedProvinsi'  => 'required',
        'selectedKabupaten' => 'required',
        'profile'           => 'nullable|image|max:1024'
    ];


    public function mount($workspace_id) {
        $this->shortID = $workspace_id;
        // get ID Workspace from short UUID
        $a = Workspace::with('user')->whereHas('user', function($query) use($workspace_id){
            $query->where('user_id', 'like', '%' . $workspace_id . '%');
        })->get();
        foreach ($a as $a) {
            $this->workspace_id = $a->id;
        }
        // show value input
        $data                 = Workspace::with('user')->find($this->workspace_id);
        $this->nama_workspace       = $data->user->name;
        $this->alamat               = $data->alamat;
        $this->email                = $data->user->email;
        $this->profileUrl           = $data->user->profile;
        if ($this->profileUrl == '') {
            $this->profileUrl       = 'picture_profiles/default-profile.png';
        }
        

        // show value select provinsi and kabupaten
        $workspace = Workspace::findOrFail($this->workspace_id);
        $this->provinsi = $this->fetchProvinsi();
        $this->selectedProvinsi = array_search($workspace->provinsi, $this->provinsi);
        if ($this->selectedProvinsi) {
            $this->kabupaten = $this->fetchKabupaten($this->selectedProvinsi);
            $this->selectedKabupaten = array_search($workspace->kabupaten, $this->kabupaten); 
        }
    }

    
    public function editInfo(){
        $this->validate();
        $data_workspace = Workspace::with('user')->findOrFail($this->workspace_id);
        $data_user      = User::findOrFail($data_workspace->user->id);
        try {
            if ($this->profile) {
                $filename = Str::random(16) . '.' . $this->profile->getClientOriginalExtension();
                $this->profile->storeAs('public/picture_profiles', $filename);
                $data_user->profile = 'picture_profiles/' . $filename;
            }
            
            $data_user->name   = $this->nama_workspace;
            $data_user->email  = $this->email;
            if ($this->password) {
                $data_user->password = bcrypt($this->password);
            }
            $data_user->save();
    
            $data_workspace->alamat     = $this->alamat;
            $data_workspace->provinsi   = $this->provinsi[$this->selectedProvinsi];
            $data_workspace->kabupaten  = $this->kabupaten[$this->selectedKabupaten];
            $data_workspace->save();
            flash('Berhasil mengubah profil.', 'success');
            return redirect()->route('info-workspace',['workspace_id'=> $this->shortID]);
        } catch (\Exception $e) {
            flash($e, 'error');
        }
        
    }

    public function updatedSelectedProvinsi($provinceId){
        $this->kabupaten = $this->fetchKabupaten($this->provinsi[$provinceId]);
        $this->selectedKabupaten = '';
    }

    public function fetchProvinsi(){
        
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY')
        ])->get('https://api.rajaongkir.com/starter/province');
        
        return collect($response->json()['rajaongkir']['results'])->pluck('province', 'province_id')->toArray();
    }

    public function fetchKabupaten($provinsiName){
        $provinceId = array_search($provinsiName, $this->provinsi);
        
        try {
            $response = Http::withHeaders([
                'key' => env('RAJAONGKIR_API_KEY'),
            ])->get('https://api.rajaongkir.com/starter/city?province='.$provinceId);
    
            $data = $response->json()['rajaongkir']['results'];
    
            $kabupaten = [];
            foreach ($data as $city) {
                $kabupaten[$city['city_id']] = $city['city_name'];
            }
    
            return $kabupaten;
        } catch (\Exception $e) {
            // Handle error jika API tidak berhasil diakses
            return [];
        }
    }

    public function render()
    {
        switch ($this->view) {
            case 'edit':
                $shortID    = $this->shortID;
                return view('livewire.user.admin.info-workspace.edit', [
                    'shortID' => $shortID,
                ]);
                break;
            
            default:
                $shortID    = $this->shortID;
                return view('livewire.user.admin.info-workspace.index', [
                    'shortID' => $shortID
                ]);
                break;
        }
        
    }
}
