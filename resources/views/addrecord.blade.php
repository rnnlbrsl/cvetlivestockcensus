@extends('layouts.app')

@section('title')
Livestock Census | Add Record
@endsection

@section('content')
<div class="container">
    <div class="col-md-12 mb-md-0 mb-1">
        <form action="addrecord" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-4" style="overflow: auto;">
                    <div class="md-form mb-1">
                        <span class="border-0">Lastname</span>
                        <input type="text" id="lastname" name="lastname" class="form-control" value="{{ old('lastname') }}">
                    </div>
                </div>
                <div class="form-group col-md-4" style="overflow: auto;">
                    <div class="md-form mb-1">
                        <span class="border-0">Firstname</span>
                        <input type="text" id="firstname" name="firstname" class="form-control" value="{{ old('firstname') }}">
                    </div>
                </div>
                <div class="form-group col-md-4" style="overflow: auto;">
                    <div class="md-form mb-1">
                        <span class="border-0">Middle Name</span>
                        <input type="text" id="middlename" name="middlename" class="form-control" value="{{ old('middlename') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2" style="overflow: auto;">
                    <div class="md-form mb-1">
                    <span class="border-0">Gender</span>
                    <select class="form-control" id="gender" name="gender" value="{{ old('gender') }}">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-2" style="overflow: auto;">
                    <div class="md-form mb-1">
                        <span class="border-0">House No.</span>
                        <input type="number" id="houseno" name="houseno" class="form-control" value="{{ old('houseno') }}">
                    </div>
                </div>
                <div class="form-group col-md-4" style="overflow: auto;">
                    <div class="md-form mb-1">
                        <span class="border-0">Sitio</span>
                        <input type="text" id="sitio" name="sitio" class="form-control" value="{{ old('sitio') }}">
                    </div>
                </div>
                <div class="form-group col-md-4" style="overflow: auto;">
                    <div class="md-form mb-1">
                    <span class="border-0">Barangay</span>
                    <select class="form-control" id="barangay" name="barangay" value="{{ old('barangay') }}">
                        <option>Alos</option>
                        <option>Amandiego</option>
                        <option>Amangbangan</option>
                        <option>Balangobong</option>
                        <option>Balayang</option>
                        <option>Bisocol</option>
                        <option>Bolaney</option>
                        <option>Baleyadaan</option>
                        <option>Bued</option>
                        <option>Cabatuan</option>
                        <option>Cayucay</option>
                        <option>Dulacac</option>
                        <option>Inerangan</option>
                        <option>Landoc</option>
                        <option>Linmansangan</option>
                        <option>Lucap</option>
                        <option>Maawi</option>
                        <option>Macatiw</option>
                        <option>Magsaysay</option>
                        <option>Mona</option>
                        <option>Palamis</option>
                        <option>Pandan</option>
                        <option>Pangapisan</option>
                        <option>Poblacion</option>
                        <option>Pocalpocal</option>
                        <option>Pogo</option>
                        <option>Polo</option>
                        <option>Quibuar</option>
                        <option>Sabangan</option>
                        <option>San Antonio</option>
                        <option>San Jose</option>
                        <option>San Roque</option>
                        <option>San Vicente</option>
                        <option>Santa Maria</option>
                        <option>Tanaytay</option>
                        <option>Tangcarang</option>
                        <option>Tawintawin</option>
                        <option>Telbang</option>
                        <option>Victoria</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Cattle and Carabao -->
            <div class="row">
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">Cattle</span>
                        <input type="number" id="mcattle" name="mcattle" class="form-control" value="{{ old('mcattle') }}" placeholder="No. of Male">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">&nbsp;</span>
                        <input type="number" id="fcattle" name="fcattle" class="form-control" value="{{ old('fcattle') }}" placeholder="No. of Female">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">Carabao</span>
                        <input type="number" id="mcarabao" name="mcarabao" class="form-control" value="{{ old('mcarabao') }}" placeholder="No. of Male">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">&nbsp;</span>
                        <input type="number" id="fcarabao" name="fcarabao" class="form-control" value="{{ old('fcarabao') }}" placeholder="No. of Female">
                    </div>
                </div>
            </div>
            <!-- Canine and Feline -->
            <div class="row">
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">Canine</span>
                        <input type="number" id="mcanine" name="mcanine" class="form-control" value="{{ old('mcanine') }}" placeholder="No. of Male">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">&nbsp;</span>
                        <input type="number" id="fcanine" name="fcanine" class="form-control" value="{{ old('fcanine') }}" placeholder="No. of Female">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">Feline</span>
                        <input type="number" id="mfeline" name="mfeline" class="form-control" value="{{ old('mfeline') }}" placeholder="No. of Male">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">&nbsp;</span>
                        <input type="number" id="ffeline" name="ffeline" class="form-control" value="{{ old('ffeline') }}" placeholder="No. of Female">
                    </div>
                </div>
            </div>
            <!-- Swine and Poultry -->
            <div class="row">
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">Swine</span>
                        <input type="number" id="fattener" name="fattener" class="form-control" value="{{ old('fattener') }}" placeholder="Fattener">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">&nbsp;</span>
                        <input type="number" id="breeder" name="breeder" class="form-control" value="{{ old('breeder') }}" placeholder="Breeder">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">Poultry</span>
                        <input type="number" id="phen" name="phen" class="form-control" value="{{ old('phen') }}" placeholder="Hen">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">&nbsp;</span>
                        <input type="number" id="prooster" name="prooster" class="form-control" value="{{ old('prooster') }}" placeholder="Rooster">
                    </div>
                </div>
            </div>
            <!-- Duck and Goat -->
            <div class="row">
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">Duck</span>
                        <input type="number" id="drake" name="drake" class="form-control" value="{{ old('drake') }}" placeholder="Drake">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">&nbsp;</span>
                        <input type="number" id="duck" name="duck" class="form-control" value="{{ old('duck') }}" placeholder="Duck">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">Goat</span>
                        <input type="number" id="buck" name="buck" class="form-control" value="{{ old('buck') }}" placeholder="Buck">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">&nbsp;</span>
                        <input type="number" id="doe" name="doe" class="form-control" value="{{ old('doe') }}" placeholder="Doe">
                    </div>
                </div>
            </div>
            <!-- Game Fowl and Native Pig -->
            <div class="row">
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">Game Fowl</span>
                        <input type="number" id="grooster" name="grooster" class="form-control" value="{{ old('grooster') }}" placeholder="Rooster">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">&nbsp;</span>
                        <input type="number" id="ghen" name="ghen" class="form-control" value="{{ old('ghen') }}" placeholder="Hen">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">Native Pig</span>
                        <input type="number" id="mnative" name="mnative" class="form-control" value="{{ old('mnative') }}" placeholder="No. of Male">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">&nbsp;</span>
                        <input type="number" id="fnative" name="fnative" class="form-control" value="{{ old('fnative') }}" placeholder="No. of Female">
                    </div>
                </div>
            </div>
            <!-- Coordinates and Image Upload -->
            <div class="row">
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">Coordinates</span>
                        <input type="number" id="latitude" name="latitude" class="form-control" value="{{ old('latitude') }}" placeholder="Latitude">
                    </div>
                </div>
                <div class="col-md-3" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">&nbsp;</span>
                        <input type="number" id="longitude" name="longitude" class="form-control" value="{{ old('longitude') }}" placeholder="Longitude">
                    </div>
                </div>
                <div class="col-md-6" style="overflow: auto">
                    <div class="md-form mb-1">
                        <span class="border-0">Upload Image</span>
                        <input type="file" id="image" name="image" class="form-control-file">
                    </div>
                </div>
                <div class="form-group col-md-12" style="overflow: auto;">
                    <div class="md-form mb-1">
                        <input type="hidden" value="{{ $id = Auth::id() }}" id="admin_id" name="admin_id" class="form-control">
                    </div>
                </div>
                <div class="text-center text-md-left">
                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                    <button type="button" class="btn btn-danger" name="cancel">Cancel</Button>
                </div>
        </form>
        <div class="status"></div>
    </div>
</div>
@endsection