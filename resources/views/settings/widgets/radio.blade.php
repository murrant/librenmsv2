@if(Settings::isReadOnly($setting))
    <div class="form-group tooltip-disabled" data-toggle="tooltip" data-title="Read Only: remove from config.php to edit.">
@else
    <div class="form-group">
@endif
    <label for="{{ $setting }}" class="col-sm-3 control-label">{{ $label }}</label>
    <div class="col-sm-9">
        <div class="btn-group {{ Settings::isReadOnly($setting) ? 'readonly' : '' }}" data-toggle="buttons">
            @foreach($items as $item)
            <label class="btn btn-primary {{ Settings::get($setting)==$item ? 'current active' : '' }}">
                <input type="radio" class="ajax-form-radio" id="{{ $setting }}" data-value="{{ $item }}" {{ Settings::get($setting)==$item ? 'checked' : '' }} {{ Settings::isReadOnly($setting) ? 'disabled' : '' }}> {{ $item }}
                 </label>
            @endforeach
        </div>
    </div>
</div>
