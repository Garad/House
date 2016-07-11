{{ csrf_field() }}
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="street">Street:</label>
            <input type="text" name="street" id="street" class="form-control" value="{{ old('street') }}">
        </div>

        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}">
        </div>

        <div class="form-group">
            <label for="zip">Zip/Postal Code:</label>
            <input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip') }}">
        </div>

        <div class="form-group">
            <label for="country:">Country:</label>
            <select  name="country" id="country" class="form-control" value="{{ old('country') }}">
                <option value="Somalia">Somalia</option>
                <option value="Ethopia">Ethopia</option>
                <option value="Kenya">Kenya</option>
                <option value="Uganda">Uganda</option>

            </select>
        </div>

        <div class="form-group">
            <label for="state:">State:</label>
            <input type="text" name="state" id="state" class="form-control" value="{{ old('state') }}">
        </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
            </div>

            <div class="form-group">
                <label for="description">Home Description:</label>
                <textarea name="description" id="description" class="form-control" value="{{ old('description') }}" rows="10">
                    </textarea>
            </div>

    </div>
</div>
    <div class="col-md-12">
        <hr>
        <div class="form-group">
            <button class="btn btn-primary">Create FLyer</button>
        </div>
    </div>




