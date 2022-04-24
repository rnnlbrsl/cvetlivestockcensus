<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <p>Search</p>
            <input wire:model.debounce.300ms="search" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Search users...">
        </div>
        <div class="w-1/6 relative mx-1">
            <p>Sort By:</p>
            <select wire:model="orderBy" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="record_id">ID</option>
                <option value="firstname">Name</option>
                <option value="sitio">Sitio</option>
                <option value="barangay">Barangay</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class="w-1/6 relative mx-1">
            <p>Sort By:</p>
            <select wire:model="orderAsc" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class="w-1/6 relative mx-1">
            <p>Filter By:</p>
            <select wire:model="filterBy" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="">--Select--</option>
                <option value="mcattle">Cattle</option>
                <option value="mcarabao">Carabao</option>
                <option value="mcanine">Canine</option>
                <option value="ffeline">Feline</option>
                <option value="fattener">Swine</option>
                <option value="prooster">Poultry</option>
                <option value="duck">Duck</option>
                <option value="doe">Goat</option>
                <option value="grooster">Game Fowl</option>
                <option value="mnative">Native Pig</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
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
                    <th class="align-middle text-center" scope="col" rowspan="2">Action</th>
                    <th class="align-middle text-center" scope="col" rowspan="2">ID</th>
                    <th class="align-middle text-center" scope="col" rowspan="2">Name</th>
                    <th class="align-middle text-center" scope="col" rowspan="2">Gender</th>
                    <th class="align-middle text-center" scope="col" rowspan="2">House No.</th>
                    <th class="align-middle text-center" scope="col" rowspan="2">Sitio</th>
                    <th class="align-middle text-center" scope="col" rowspan="2">Barangay</th>
                    <th class="text-center" scope="col" colspan="2">Cattle</th>
                    <th class="text-center" scope="col" colspan="2">Carabao</th>
                    <th class="text-center" scope="col" colspan="2">Canine</th>
                    <th class="text-center" scope="col" colspan="2">Feline</th>
                    <th class="text-center" scope="col" colspan="2">Swine</th>
                    <th class="text-center" scope="col" colspan="2">Poultry</th>
                    <th class="text-center" scope="col" colspan="2">Duck</th>
                    <th class="text-center" scope="col" colspan="2">Goat</th>
                    <th class="text-center" scope="col" colspan="2">Game Fowl</th>
                    <th class="text-center" scope="col" colspan="2">Native Pig</th>
                    <th class="text-center" scope="col" colspan="2">Coordinates</th>
                    <th class="align-middle text-center" scope="col" rowspan="2">Admin</th>
                </tr>
                <tr>
                    <td class="align-middle text-center">Male</td>
                    <td class="align-middle text-center">Female</td>
                    <td class="align-middle text-center">Male</td>
                    <td class="align-middle text-center">Female</td>
                    <td class="align-middle text-center">Male</td>
                    <td class="align-middle text-center">Female</td>
                    <td class="align-middle text-center">Male</td>
                    <td class="align-middle text-center">Female</td>
                    <td class="align-middle text-center">Swine</td>
                    <td class="align-middle text-center">Poultry</td>
                    <td class="align-middle text-center">Duck</td>
                    <td class="align-middle text-center">Goat</td>
                    <td class="align-middle text-center">Drake</td>
                    <td class="align-middle text-center">Duck</td>
                    <td class="align-middle text-center">Buck</td>
                    <td class="align-middle text-center">Doe</td>
                    <td class="align-middle text-center">Rooster</td>
                    <td class="align-middle text-center">Hen</td>
                    <td class="align-middle text-center">Male</td>
                    <td class="align-middle text-center">Female</td>
                    <td class="align-middle text-center"><i>Longitude</i></td>
                    <td class="align-middle text-center"><i>Latitude</i></td>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $rec)
                <tr>
                    <td>
                        <div class="btn-group" role="group" aria-label="Action Buttons">
                            <a class="btn btn-success" onclick="buttonOnClick({{$rec->record_id}}, 'view')">View</a>
                            <a class="btn btn-primary" onclick="buttonOnClick({{$rec->record_id}}, 'edit')">Edit</a>
                            <a class="btn btn-danger" onclick="buttonOnDelete({{$rec->record_id}}, 'delete')">Delete</a>
                        </div>
                    </td>
                    <td><strong>{{$rec->record_id}}</strong></td>
                    <td>{{$rec->firstname. ' ' . $rec->lastname}}</td>
                    <td>{{$rec->gender}}</td>
                    <td>{{$rec->houseno}}</td>
                    <td>{{$rec->sitio}}</td>
                    <td>{{$rec->barangay}}</td>
                    <td>{{$rec->mcattle}}</td>
                    <td>{{$rec->fcattle}}</td>
                    <td>{{$rec->mcarabao}}</td>
                    <td>{{$rec->fcarabao}}</td>
                    <td>{{$rec->mcanine}}</td>
                    <td>{{$rec->fcanine}}</td>
                    <td>{{$rec->mfeline}}</td>
                    <td>{{$rec->ffeline}}</td>
                    <td>{{$rec->fattener}}</td>
                    <td>{{$rec->breeder}}</td>
                    <td>{{$rec->phen}}</td>
                    <td>{{$rec->prooster}}</td>
                    <td>{{$rec->drake}}</td>
                    <td>{{$rec->duck}}</td>
                    <td>{{$rec->buck}}</td>
                    <td>{{$rec->doe}}</td>
                    <td>{{$rec->grooster}}</td>
                    <td>{{$rec->ghen}}</td>
                    <td>{{$rec->mnative}}</td>
                    <td>{{$rec->fnative}}</td>
                    <td>{{$rec->latitude}}</td>
                    <td>{{$rec->longitude}}</td>
                    <td>{{$rec->admin_id}}</td>
                    <!-- <td><img width="200px" height="200px" src="{{ asset("storage/images/$rec->img")}}"/></td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $records->links() !!}
</div>