<!DOCTYPE html>
<html>
<head>
    <title>Jemacl.us</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="/js/codemirror/lib/codemirror.js"></script>
    <script src="/js/codemirror/addon/edit/matchbrackets.js"></script>
    <script src="/js/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="/js/codemirror/mode/xml/xml.js"></script>
    <script src="/js/codemirror/mode/javascript/javascript.js"></script>
    <script src="/js/codemirror/mode/css/css.js"></script>
    <script src="/js/codemirror/mode/clike/clike.js"></script>
    <script src="/js/codemirror/mode/php/php.js"></script>
    <link href="/js/codemirror/lib/codemirror.css" rel="stylesheet"/>
    <link href="/js/codemirror/theme/monokai.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="/css/main.css" rel="stylesheet"/>
</head>
<body>
    <form method="post" action="{{ route('new') }}">
    <div class="header">
        <div style="float:right">
            <button type="submit" style="background: transparent;border: 0;" title="Save"><i class="fa fa-floppy-o" style="color: #FAFAFA;font-size: 24px;margin: 15px;cursor: pointer;"></i></button>
            <a><i class="fa fa-plus-circle" style="color: #999999;font-size: 24px;margin: 15px;" title="New"></i></a>
            <a><i class="fa fa-code-fork" style="color: #999999;font-size: 24px;margin: 15px;" title="Fork Code"></i></a>
        </div>

        <h1>jemacl.us <span style="font-size:14px; font-style: italic;">a pastebin service</span></h1>
    </div>

        {{ csrf_field() }}
        <textarea id="data" name="data">{{ $paste->pasted_data }}</textarea>
    </form>

    <script>
    $(document).ready(function () {
        var options = {
            lineNumbers: true,
            mode: "php",
            indentUnit: 4,
            smartIndent: true,
            indentWithTabs: false,
            theme: "monokai",
            autofocus: true,
            viewportMargin: 100,
        }
        var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('data'), options);

        $('.CodeMirror').css('height', $(window).height() - $('.header').height() - 100);
     });
    </script>
</body>
</html>
