<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Data to be printed -->
    <div id="content">
        <table>
            <tr>
                <th>Roll No</th>
                <th>Name</th>
            </tr>
            <tr>
                <td>9987</td>
                <td>Rupak</td>
            </tr>
        </table>
    </div>


    <br><br>
    
    
    <button id="cmd">generate PDF</button>

    <script>

        $('#cmd').click(function() {
            window.print(document.write($('#content').html()));
            window.location.reload();
        });
    </script>
</body>

</html>