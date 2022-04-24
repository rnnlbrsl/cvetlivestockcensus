<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <p>Search</p>
            <input wire:model.debounce.300ms="search" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Search users...">
        </div>
        <div class="w-1/6 relative mx-1">
            <p>Paginate by:</p>
            <select wire:model="perPage" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
    </div>
    <table class="table table-bordered ">
            <thead>
                <tr>                    
                    <th class="align-middle text-center" scope="col" rowspan="2">ID</th>
                    <th class="align-middle text-center" scope="col" rowspan="2">Name</th>
                    <th class="align-middle text-center" scope="col" rowspan="2">Email</th>
                    <th class="align-middle text-center" scope="col" rowspan="2">Status</th>
                    <th class="align-middle text-center" scope="col" rowspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    @if ($user->is_active)
                    <td>Active</td>
                    @else
                    <td>Pending</td>
                    <td><a class="btn btn-success" onclick="buttonOnClick({{$user->id}})">Approve</a></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $users->links() !!}
</div>