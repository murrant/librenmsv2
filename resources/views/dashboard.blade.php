<!DOCTYPE html>
<html lang="en">
<head>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Float grid demo</title>

    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.min.css"/>--}}

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.5.0/lodash.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.jQueryUI.min.js"></script>--}}
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>


    <style type="text/css">
        .grid-stack {
            background: lightgoldenrodyellow;
        }
        .grid-stack-item-content {
            color: #2c3e50;
            text-align: center;
            background-color: #18bc9c;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <h1>Float grid demo</h1>

    <div>
        <a class="btn btn-default" id="add-new-widget" href="#">Add Widget</a>
    </div>

    <br/>

    <div class="grid-stack">
    </div>
</div>


<script type="text/javascript">
    $(function () {
        var options = {
            float: true
        };
        $('.grid-stack').gridstack(options);
        new function () {
            this.items = [
                {x: 0, y: 0, width: 2, height: 2},
                {x: 3, y: 1, width: 1, height: 2},
                {x: 4, y: 1, width: 1, height: 1},
                {x: 2, y: 3, width: 3, height: 1},
//                    {x: 1, y: 4, width: 1, height: 1},
//                    {x: 1, y: 3, width: 1, height: 1},
//                    {x: 2, y: 4, width: 1, height: 1},
                {x: 2, y: 5, width: 1, height: 1}
            ];
            this.grid = $('.grid-stack').data('gridstack');
            this.addNewWidget = function () {
                var node = this.items.pop() || {
                        x: 12 * Math.random(),
                        y: 5 * Math.random(),
                        width: 1 + 3 * Math.random(),
                        height: 1 + 3 * Math.random()
                    };
                this.grid.addWidget($('<div><div class="grid-stack-item-content" /><div/>'),
                    node.x, node.y, node.width, node.height);
                return false;
            }.bind(this);
            $('#add-new-widget').click(this.addNewWidget);
        };
    });
</script>
</body>
</html>
