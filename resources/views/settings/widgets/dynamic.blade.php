
@foreach(is_array(Settings::get($setting)) ? Settings::get($setting) : [Settings::get($setting)]  as $key => $value)
    @if(Settings::isReadOnly($setting.'.'.$key))
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
    <input type="text" class="form-control ajax-form-simple" name="{{ $setting }}" id="{{ $setting.'.'.$key }}"
       data-index="{{ $key }}" data-original-value="{{ $value }}" value="{{ $value }}" {{ Settings::isReadOnly($setting) ? 'disabled' : '' }} />
    @if(empty($label))
        <span class="input-group-btn"><button type="button" class="btn btn-danger"><i class="fa fa-lg fa-times-circle"></i></button></span>
    @else
        <span class="input-group-btn" style="padding-left:8px"><button type="button" class="btn btn-success"><i class="fa fa-lg fa-plus-circle"></i></button></span>

        @endif
        </div>
    </div>
</div>
{{ $label="" }}
@endforeach
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9 template hide">
        <div class="input-group">
            <input type="text" class="form-control ajax-form-simple {{ Settings::isReadOnly($setting) ? 'disabled' : '' }}" id="template-{{ $setting }}" data-original-value="{{ $value }}"
               value="{{ $value }}" {{ Settings::isReadOnly($setting) ? 'disabled' : '' }}>
            <span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-lg fa-times-circle text-danger"></i></button></span>
        </div>
    </div>
</div>