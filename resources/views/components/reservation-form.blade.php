<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ $action }}" id="reservation-from">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-form-label" for="first_name">Nom </label>
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                    placeholder="Entrez vote nom"
                                    value="{{ old('first_name',Auth::user()->first_name ?? null) }}">
                                @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label" for="last_name">Prénom </label>
                                <input type="text" class="form-control" name="last_name" id="last_name"
                                    placeholder="Entrez vote prenom"
                                    value="{{ old('last_name',Auth::user()->last_name ?? null) }}">
                                @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 m-auto">
                                <label class="col-form-label" for="cin">CIN </label>
                                <input type="text" class="form-control" name="cin" id="cin"
                                    placeholder="Entrez vote CIN" value="{{ old('cin',Auth::user()->cin ?? null) }}">
                                @error('cin')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-form-label" for="pickup_city">Ville de retrait</label>
                                <select class="form-control city" data-city="a" name="pickup_city" id="pickup_city">
                                    @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('pickup_city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label" for="pickup_loc">Localisation de retrait </label>
                                <select class="form-control" name="pickup_loc" id="pickup_loc">
                                    {{-- <option value="gasoline" @if( $car && $car->location==="gasoline") selected
                                        @endif>Gasoline
                                    </option> --}}
                                </select>
                                @error('pickup_loc')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-form-label" for="return_city">Ville de retour</label>
                                <select class="form-control city" data-city="b" name="return_city" id="return_city">
                                    @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('return_city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label" for="return_loc">Localisation de retour</label>
                                <select class="form-control" name="return_loc" id="return_loc">

                                </select>
                                @error('return_loc')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-form-label" for="pickup_date">Date De Retrait</label>
                                <input type="Date" class="form-control" name="pickup_date" id="pickup_date"
                                    value="{{ old('pickup_date',$pickup_date ?? null) }}">
                                @error('pickup_date')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label" for="return_date">Date De Retour</label>
                                <input type="Date" class="form-control" name="return_date" id="return_date"
                                    value="{{ old('return_date',$return_date ?? null) }}">
                                @error('return_date')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="car_id" value="{{ $carId }}">
                        <div class="input-submit m-auto">
                            <button type="submit">
                                Reserver Maintenant
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
