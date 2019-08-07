<fieldset>
        <h2 class="title">Personal Details</h2>
        <p class="subtitle">Step 2</p>
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City *</label>
                    <input autocomplete="off" id="city" name="city" @if(!empty($datingProfile['city'])) value="{{ $datingProfile['city'] }}" @endif type="text" class="form-control" />
                </div>
                <div class="form-group col-md-6">
                    <label for="state"><strong>State</strong> *</label>
                    <input autocomplete="off" id="state" name="state" @if(!empty($datingProfile['state'])) value="{{ $datingProfile['state'] }}" @endif type="text"  class="form-control" />
                </div>
        </div>

        <div class="form-row">

                <label for="country">Country *</label>
                <select name="country" class="form-control" id="country">
                        <option value="">Select</option>
                        @foreach($countries as $country)
                        <option value="{{ $country->country_name }}" @if(!empty($datingProfile['country']) && $datingProfile['country']==$country->coutry_name) selected="" @endif>{{ $country->country_name }}</option>
                        @endforeach
                </select>
        </div>
        <div class="form-row">
            <label for="language"> Languages *</label>
            <select name="languages" class="form-control" id="language">
                    <option value="">Select</option>
                    @foreach($languages as $language)

                    <option value="{{ $language->name }}" <?php if(!empty($datingProfile->languages) && preg_match('/'.$language->name.'/i', $datingProfile->languages)){ echo "selected"; } ?>>{{ $language->name }}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="phone">Phone *</label>
                  <input name="phone" class="form-control" type="number" style="border:none;" id="phone">
                </div>
        </div>

            <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="image">Upload Image File *</label>
                      <input name="image" class="form-control" type="file" style="border:none;" id="image">
                    </div>
            </div>
    <input class="pre_btn" name="previous" type="button" value="Previous">
    <input class="next_btn" name="next" type="button" value="Next">
</fieldset>
