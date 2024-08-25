<?php

namespace App\Livewire\User\Admin;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\UserWorkspace;
use App\Models\KelasWorkspace;
use App\Models\MapelWorkspace;

#[Title('Kelas Workspace')]
class Kelas extends Component
{
    public $view = 'index';
    public $workspace_id, $shortID, $paginate, $count;
    public $nama_kelas, $selectedWali, $mapel, $wali, $selectedMapel, $guruMapel, $murid, $selectedGuruMapel, $selectedMurid, $link_akses, $kode_akses;
    // public $selectedMapel   = [];
    public $search          = '';
    public $columns         = [];

    protected $rules = [
        'nama_kelas'        => 'required|string|max:255',
        'selectedMapel'     => 'required|array',
        'selectedWali'      => 'required', 
    ];

    public function mount($workspace_id, $id=null, $view='') {
        $this->shortID = $workspace_id;
        // get ID Workspace from short UUID
        $a = UserWorkspace::with('user')->whereHas('user', function($query) use($workspace_id){
            $query->where('user_id', 'like', '%' . $workspace_id . '%');
        })->get();
        foreach ($a as $a) {
            $this->workspace_id = $a->workspace_id;
        }

        // for count all data
        $this->count = KelasWorkspace::where('workspace_id', $this->workspace_id)
        ->count();

        // for thead
        $this->columns = [
            'Nama Kelas'    => 'detailKelas.nama',
            'Jumlah murid'  => 'jumlah_murid'
        ];

        // select mapel
        $this->mapel = MapelWorkspace::with('detailMapel')->where('workspace_id', $this->workspace_id)->get()->pluck('detailMapel.nama', 'detailMapel.id')->toArray();

        // select wali kelas
        $this->wali = UserWorkspace::with('user')->where([
            ['workspace_id','=', $this->workspace_id],
            ['rw_id', '=', '3']
        ])->get()->pluck('user.name', 'user.id')->toArray();

        // select guru mapel
        $this->guruMapel = UserWorkspace::with('user')->where([
            ['workspace_id','=', $this->workspace_id],
            ['rw_id', '=', '2']
        ])->get()->pluck('user.name', 'user.id')->toArray();
        
        // select murid
        $this->murid = UserWorkspace::with('user')->where([
            ['workspace_id','=', $this->workspace_id],
            ['rw_id', '=', '5']
        ])->get()->pluck('user.name', 'user.id')->toArray();

        $kelas = 'p8xdz0aQ';
        $this->link_akses = env('APP_URL') .$this->shortID . '/' . $kelas . '/join-kelas';
        $this->kode_akses = 'aPdlmiZHERQrSf3i';
    }

    public function addData() {
        dd($this->selectedMapel);
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function updatingCount() {
        $this->paginate = KelasWorkspace::where('workspace_id', $this->workspace_id)
        ->count();
    }

    public function render()
    {
        switch ($this->view) {
            case 'create' :
                $shortID = $this->shortID; 
                return view('livewire.user.admin.kelas.create',[
                    'shortID'     => $shortID,
                ]);
                break;
            case 'edit':
                $shortID = $this->shortID;
                return view('livewire.user.admin.kelas.edit',[
                    'shortID'     => $shortID,
                ]);
                break;
            case 'detail' : 
                $shortID = $this->shortID;
                return view('livewire.user.admin.kelas.detail',[
                    'shortID'     => $shortID,
                ]);
                break;
            case 'add-mapel':
                $shortID = $this->shortID;
                return view('livewire.user.admin.kelas.form-mapel',[
                    'shortID'     => $shortID,
                ]);
                break;
            case 'edit-mapel':
                $shortID = $this->shortID;
                return view('livewire.user.admin.kelas.form-mapel',[
                    'shortID'     => $shortID,
                ]);
                break;
            case 'add-anggota':
                $shortID = $this->shortID;
                return view('livewire.user.admin.kelas.add-anggota',[
                    'shortID'     => $shortID,
                ]);
                break;
            default:
                $shortID    = $this->shortID;
                $count      = $this->count;
                $search     = $this->search;
                $paginate   = $this->paginate;
                $actionButton = ['detail', 'edit','arsip'];
                $data       = KelasWorkspace::where('workspace_id', $this->workspace_id)
                            ->whereHas('detailKelas', function ($query) use ($search) {
                                $query->where('nama', 'like', '%' . $search . '%');
                            })
                            ->withCount(['joinKelas as jumlah_murid' => function ($query) {
                                $query->whereHas('userWorkspace', function ($subQuery) {
                                    $subQuery->where('rw_id', 5); 
                                });
                            }]);
                            if ($paginate != 10) {
                                $data = $data->paginate(10);
                            }else{
                                $data = $data->paginate($paginate);
                            }
                return view('livewire.user.admin.kelas.index',[
                    'shortID'     => $shortID,
                    'data'        => $data,
                    'count'       => $count,
                    'actionButton'=> $actionButton
                ]);
            break;
        }
        
    }
}
