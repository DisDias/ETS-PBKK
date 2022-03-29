<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekam Medis</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: darkslategray;
        }
        footer {
            color: aliceblue;   
            font-size: 14px;
        }
    </style>
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <br>
                <div class="alert alert-success">
                    <button type="button" class="close close-alert" data-dismiss="alert">x</button>
                    {{ session()->get('success') }}
                </div>

                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="my-4" align="center">Data Yang Anda Input Sebagai Berikut : </h3>

                        <table width="675" border="1" cellspacing="0" cellpadding="5" align="center">
                            <tr align="center" bgcolor="#8FBC8F">
                                <th>REKAM MEDIS</th>
                            </tr>
                        </table>
                        
                        <table width="675" border="1" cellspacing="1" cellpadding="5" align="center">
                            <tr align="center" bgcolor="#8FBC8F">
                                <th width="150">DATA</th>
                                <th width="315">KETERANGAN</th>
                                <th width="210">FOTO</th>
                            </tr>
                            <tr>
                                <td>Pasien</td>
                                <td>{{ $data->pasien }}</td>
                                <td rowspan="10" align="center"><img src="{{ asset('post-images/'.$data->image) }}" width="175" height="175"></td>
                            </tr>
                            <tr>
                                <td>Dokter</td>
                                <td>{{ $data->dokter }}</td>
                            </tr>
                            <tr>
                                <td>Kondisi</td>
                                <td>{{ $data->kondisi }}</td>
                            </tr>
                            <tr>
                                <td>Suhu</td>
                                <td>{{ $data->suhu }}</td>
                            </tr>
                        </table>
                        <br><br>
                        <a href="/dashboard" class="btn btn-danger">Home</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </body><br>
    <footer><center>
        Created by Dias Tri Kurniasari 
        </center>   
    </footer> 
    <br>   
</html> 