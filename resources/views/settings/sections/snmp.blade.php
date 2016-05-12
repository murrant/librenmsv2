<section class="col-lg-6">
    <div class="nav-tabs-custom">
        <!-- Tabs within a box -->
        <ul class="nav nav-tabs pull-right">
            <li><a href="#snmp-v3" data-toggle="tab">v3</a></li>
            <li class="active"><a href="#snmp-common" data-toggle="tab">Common</a></li>
            <li class="pull-left header"><i class="fa fa-tags"></i>SNMP Defaults</li>
        </ul>

        <div class="tab-content no-padding">
            <div class="box-body tab-pane form-horizontal active" id="snmp-common">
                {{--<div class="container">--}}

                    @include('settings.widgets.radio', ['setting'=>'snmp.version', 'label'=>'Default Version', 'items'=>['v1', 'v2c', 'v3']])
                    @include('settings.widgets.dynamic', ['setting'=>'snmp.community', 'label'=>'Community'])
                    @include('settings.widgets.text', ['setting'=>'snmp.port', 'label'=>'Port'])
                    @include('settings.widgets.sortable', ['setting'=>'snmp.transports', 'label'=>'Transport Order', 'default'=>['udp','udp6','tcp','tcp6']])

            {{--<div class="box-body tab-pane form-horizontal" id="snmp-v3">--}}
                {{--<div class="container">--}}
                    {{--@include('settings.widgets.dynamic', ['key'=>'snmp.v3', 'settings'=>[['setting'=>'authlevel', 'type'=>'text', 'label'=>'AuthLevel'],['setting'=>'authname', 'type'=>'text', 'label'=>'AuthName'], ['setting'=>'authalgo', 'type'=>'text', 'label'=>'AuthAlgo'], ['setting'=>'authpass', 'type'=>'text', 'label'=>'AuthPass'], ['setting'=>'cryptoalgo', 'type'=>'text', 'label'=>'CyrptoAlgo'], ['setting'=>'cryptopass', 'type'=>'text', 'label'=>'CryptoPass']]])--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</section>
