<?php

namespace App\Http\Livewire;
use App\Records;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class RecordsTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'record_id';
    public $orderAsc = true;
    public $filterBy = '';

    public function render()
    {
        session(['perPage' => $this->perPage]);
        session(['search' => $this->search]);
        session(['orderBy' => $this->orderBy]);
        session(['filterBy' => $this->filterBy]);

        $records = Records::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc');

        if ($this->filterBy) {
            $records = $records->whereNotNull($this->filterBy);
        }

        $records = $records->simplePaginate($this->perPage);

        return view('livewire.records-table', [
            'records' => $records,
        ]);
    }
}
