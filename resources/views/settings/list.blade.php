@extends('layouts.app')

@section('title', trans('nav.settings.global'))

@section('content-header')
    <h1>
        {{ trans('nav.settings.global') }}
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> {{ trans('nav.home') }}</a></li>
        @if( isset($section) )
            <li><a href="{{ url('/settings') }}">{{ trans('nav.settings.main') }}</a></li>
            <li class="active">{{ ucfirst($section) }}</li>
        @else
            <li class="active">{{ trans('nav.settings.main') }}</li>
        @endif
    </ol>
@endsection


@section('content')
<div class="container">
    @if( isset($section) )
        <div class="row">
            @include('settings.sections.' . $section)
        </div>
    @else
        <!-- include all sections, two per row -->
        <div class="row">
            @include('settings.sections.snmp')
        </div>

        <div class="row">
            <div class="box col-lg-6">
                <div class="box-header">
                    <h3 class="box-title">All Settings</h3>
                </div>
                <div class="box-body">
            <pre>
{{ print_r(Settings::all(), 1) }}
            </pre>
                </div>
            </div>
        </div>

<section class="col-lg-6"><pre>
{{ print_r(Settings::all(), 1) }}
</pre></section>


    @endif

</div>
@endsection

@section('js_before_bootstrap')
    <script src="{{ url('js/plugins/jQueryUI/jquery-ui.min.js') }}"></script>
@endsection

@section('scripts')
    <script src="{{ url('js/util.js') }}"></script>
    <script type="application/javascript">
        $.Util.ajaxSetup();

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

        $('.sortable').sortable({
            handle: '.drag-handle',
            create: function () {
                var $this = $(this);
                if($this.hasClass('readonly')) {
                    $this.sortable('disable');
                    $('span.drag-handle',this ).remove();
                }
            },
            update: function () {
                var $this = $(this);
                // Disabling sorting
                $this.sortable('disable');
                // Adding effect
                $this.addClass('pulsate');

                var key = $this.attr('id');
                var data = $this.sortable('toArray', {attribute: 'data-value'});

                $.ajax({
                    type: 'POST',
                    url: '{{ url('settings') }}',
                    data: {
                        type: 'settings-array',
                        key: key,
                        value: data
                    },
                    dataType: 'html',
                    success: function () {
                        $this.sortable('enable');
                        $this.removeClass('pulsate');

                        $this.closest('.form-group').addClass('has-success');
                        setTimeout(function () {
                            $this.closest('.form-group').removeClass('has-success');
                        }, 2000);
                    },
                    error: function () {
                        $this.sortable('cancel');
                        $this.sortable('enable');
                        $this.removeClass('pulsate');

                        $this.closest('.form-group').addClass('has-error');
                        setTimeout(function () {
                            $this.closest('.form-group').removeClass('has-error');
                        }, 2000);
                    }
                });
            }
        });

        $('.ajax-form-simple').bind('blur keyup', function(e) {
            if(e.type === 'keyup' && e.keyCode !== 13) return;
            var $this = $(this);
            var data = $this.val();

            var original = $this.data('original-value');
            if(data == original) return;

            var key = $this.attr('id');
            console.log($this.parent().html());

            $this.next('i').remove();
            $this.after('<i class="fa fa-spin fa-spinner fa-lg"></i>');
            console.log($this.parent().html());

            $.ajax({
                type: 'POST',
                url: '{{ url('settings') }}',
                data: {
                    type: 'settings-value',
                    key: key,
                    value: data
                },
                dataType: 'html',
                success: function () {
                    $this.data('original-value', data);
                    $this.closest('.form-group').addClass('has-success');
                    $this.next('i').remove();
                    $this.after('<i class="fa fa-check fa-lg text-success"></i>');
                    setTimeout(function () {
                        $this.closest('.form-group').removeClass('has-success');
                        $this.next('i').remove();
                    }, 2000);
                },
                error: function () {
                    $this.val(original);
                    $this.closest('.form-group').addClass('has-error');
                    $this.next('i').remove();
                    $this.after('<i class="fa fa-close fa-lg text-danger"></i>');
                    setTimeout(function () {
                        $this.closest('.form-group').removeClass('has-error');
                        $this.next('i').remove();
                    }, 2000);
                }
            });
        });

        $('.ajax-form-radio').change(function() {
            var $this = $(this);
            var key = $this.attr('id');
            var data = $this.data('value');

            $this.closest('label').after('<i class="fa fa-spin fa-spinner fa-lg"></i>');

            $.ajax({
                type: 'POST',
                url: '{{ url('settings') }}',
                data: {
                    type: 'settings-value',
                    key: key,
                    value: data
                },
                dataType: 'html',
                success: function () {
                    $this.parent().siblings('.current').removeClass('current');
                    $this.parent().addClass('current');
                    $this.closest('label').next('i').remove();

                    $this.closest('.form-group').addClass('has-success');
                    setTimeout(function () {
                        $this.closest('.form-group').removeClass('has-success');
                    }, 2000);
                },
                error: function () {
                    $this.parent().removeClass('active');
                    $this.parent().siblings('.current').addClass('active');
                    $this.closest('label').next('i').remove();

                    $this.closest('.form-group').addClass('has-error');
                    setTimeout(function () {
                        $this.closest('.form-group').removeClass('has-error');
                    }, 2000);
                }
            });
        });


        $('.ajax-form-dynamic-single').each(function(index, element) {
            var $container = $(element);
            var $inputButtons = $container.find('.input-group-btn');
//            console.log($inputs.attr('id'));
//            var $formgroup = $container.children('.form-group:first');
//            var inputField = $formgroup.children(':nth-child(2)');
//            var $addButton = $('<div class="form-group row"><div class="col-sm-11"><button class="btn btn-default pull-right"><i class="fa fa-lg fa-plus-circle"></i> Add </button></div></div>');
//            $container.append($addButton);

//            var $removeButton = $('<span class="input-group-btn"><button class="btn btn-default"><i class="fa fa-lg fa-times-circle text-danger"></i></button></span>');
            $inputButtons.click(function() {
               $(this).closest('.form-group').remove();
                updateIds($container);
            });
//            $inputs.parent().removeClass('col-sm-9').addClass('col-sm-8');
//            $inputs.closest('.form-group').append($removeButton);
            $inputButtons.removeClass('hide');

        });

        $('.ajax-form-dynamic-add-btn').click(function() {
            var $container = $(this).closest('.ajax-form-dynamic-single');
            var $inputs = $container.find('input');
            var $newform = $container.find('.form-group:nth-last-child(2)').clone();
//            console.log('html: ' + $formGroups.last().html());
//            var $newform = $formGroups.last().clone(true);
//            $newform.children('.control-label:first').empty();
                $newform.children('label').remove();
            $newform.children('.col-sm-9').addClass('col-sm-offset-3');
            console.log($newform.html());
//                        .replaceWith('<div class="col-sm-3"></div>');
//                var $removeButton = $newform.find('.btn > i').removeClass('fa-plus-circle').addClass('fa-times-circle');
//            console.log($newform);

            // fixup the input field
            var $newInput = $newform.find('input');

            $newInput.val('');
            var oldid = $newInput.attr('id');
            console.log('oldid: ' + oldid);
            var i = oldid.split('.').pop();
            var cut = -i.length;
            i = parseInt(i) + 1;

            var id = oldid.slice(0,cut) + i;
            console.log('newid: ' + id);
            $newInput.attr('id', id);

//                $removeButton.click(function() {
//                   $(this).closest('.form-group').remove();
//                });
            $newform.insertBefore($(this).closest('.form-group'));
        });

        function updateIds(elem) {
            var inputs = $(elem).find('input');
            var id = inputs.attr('id');
            var key = id.slice(0, id.lastIndexOf('.'));
            var i = 0;
            console.log(key);
        }

    </script>
@endsection
