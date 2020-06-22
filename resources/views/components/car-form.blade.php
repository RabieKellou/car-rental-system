<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ $action }}">
                        @if($editing)
                        @method('PUT')
                        @endif
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="col-form-label" for="category">Category </label>
                                <select class="form-control" name="category_id" id="category">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($car->category_id===$category->id)
                                        @endif>
                                        {{ $category->cat_label }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-form-label" for="brand">Brand </label>
                                <input type="text" class="form-control" name="brand" id="brand"
                                    placeholder="enter car brand" value="{{ old('brand',$car->brand ?? null) }}">
                                @error('brand')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label" for="model">Model </label>
                                <input type="text" class="form-control" name="model" id="model"
                                    placeholder="Enter model" value="{{ old('model',$car->model ?? null) }}">
                                @error('model')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-form-label" for="fuel">fuel type </label>
                                <select class="form-control" name="fuelType" id="fuel">
                                    <option value="gasoline" @if( $car && $car->fuelType==="gasoline") selected
                                        @endif>Gasoline
                                    </option>
                                    <option value="diesel" @if($car &&$car->fuelType==="diesel") selected @endif>Diesel
                                    </option>
                                    <option value="electric" @if($car && $car->fuelType==="electric") selected
                                        @endif>Electric
                                    </option>
                                </select>
                                @error('fuelType')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label" for="gear">GearBox Type </label>
                                <select class="form-control" name="gearBoxType" id="gear">
                                    <option value="manual" @if($car->gearBoxType==="manual") selected
                                        @endif>Manuel
                                    </option>
                                    <option value="automatic" @if($car->gearBoxType==="automatic") selected
                                        @endif>Automatic
                                    </option>
                                </select>
                                @error('gearBoxType')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-form-label" for="seat">number of seats</label>
                                <input type="number" name="seatCount" id="seat"
                                    value="{{ old('seatCount',$car->seatCount ?? null) }}">
                                @error('seatCount')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label" for="door">number of doors </label>
                                <input type="number" name="doorCount" id="door"
                                    value="{{ old('doorCount',$car->doorCount ?? null) }}">
                                @error('doorCount')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-form-label" for="purchase_date">purchase Date </label>
                                <input type="Date" class="form-control" name="purchase_date" id="purchase_date"
                                    value="{{ old('purchase_date',$car->purchase_date ?? null) }}">
                                @error('purchase_date')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label" for="price">price en Dh </label>
                                <input type="number" class="form-control" name="price" id="price" min="0" step=".01"
                                    value="{{ old('price',$car->price ?? null) }}">
                                @error('price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-12">
                                <label class="col-form-label" for="features">Features </label>

                                <div class="btn-group form-inline" data-toggle="buttons" id="features">
                                    @foreach($features as $feature)
                                    <label class="btn btn-light m-1" for="f-{{ $feature->id }}">
                                        {{ $feature->name }}
                                        <input type="checkbox" class="custom-control-input" name="features[]"
                                            id="f-{{ $feature->id }}" value="{{ $feature->id }}" autocomplete="off"
                                            @if($editing &&
                                            in_array($feature->id,$car->features->pluck('id')->toArray()))
                                        checked
                                        @endif
                                        >
                                    </label>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="col-form-label" for="car_desc">Car Desc </label>
                                <textarea type="text" name="car_desc"
                                    id="car_desc">{{ old('car_desc',$car->car_desc ?? null) }}</textarea>
                                @error('car_desc')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-submit">
                            <button type="submit">
                                @if($editing)
                                Enregister
                                @else
                                Ajouter
                                @endif

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
