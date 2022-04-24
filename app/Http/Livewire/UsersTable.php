<?php

namespace App\Http\Livewire;
use App\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class UsersTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'record_id';
    public $orderAsc = true;

    public function render()
    {
        $users = User::search($this->search);
        $users = $users->simplePaginate($this->perPage);

        return view('livewire.users-table', [
            'users' => $users,
        ]);
    }
}
