<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#openPdf").click(function () {
                    document.getElementById("pdfid").setAttribute("src", "https://research.google.com/pubs/archive/44678.pdf");
            })

        })

    </script>
</head>
<body>
    <button id="openPdf">OpenPdf</button>
    <br/>
    <iframe id="pdfid" width="800" height="600"/>
</body>
</html>