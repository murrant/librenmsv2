@if(Settings::isReadOnly($setting))
   <div class="form-group tooltip-disabled" data-toggle="tooltip" data-title="Read Only: remove from config.php to edit.">
@else
    <div class="form-group">
@endif

    @if(empty($label))
        <div class="col-sm-offset-3 col-sm-9">
    @else
        <label for="{{ $setting }}" class="col-sm-3 control-label">{{ $label }}</label>
        <div class="col-sm-9">
    @endif
            <div class="input-group">
                <input type="text" class="form-control ajax-form-simple {{ Settings::isReadOnly($setting) ? 'disabled' : '' }}" id="{{ $setting }}" data-original-value="{{ Settings::get($setting) }}"
                       value="{{ Settings::get($setting) }}" {{ Settings::isReadOnly($setting) ? 'disabled' : '' }}>
                <span class="input-group-btn hide"><button class="btn btn-default"><i class="fa fa-lg fa-times-circle text-danger"></i></button></span>
            </div>
        </div>
    </div>
