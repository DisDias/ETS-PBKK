<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

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
<body>
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Selamat Datang di Formulir Rekam Medis</h3>
                            <h6 class="text-center">Isikan data diri Anda dengan benar!</h6>
 
                            <br/>
                             <!-- form validasi -->
                             <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="pasien">Pasien</label><br>
                                            <select pasien="pasien" class="form-select mb-3" aria-label="Default select example">
                                            <option selected>Pilih Nama Pasien</option>
                                            <option value="Nur">Nur</option>
                                            <option value="Rama">Rama</option>
                                            </select>
                                            @error('pasien')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                                <label for="dokter">Dokter</label><br>
                                                <select dokter="dokter" class="form-select mb-3" aria-label="Default select example">
                                                <option selected>Pilih Nama Dokter</option>
                                                <option value="Dias">Dias</option>
                                                <option value="Dyandra">Dyandra</option>
                                                </select>
                                                @error('dokter')
                                                           <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        <div class="form-group">
                                            <label for="kondisi">Kondisi Kesehatan</label>
                                            <input class="form-control" type="text" name="kondisi" value="{{ old('kondisi') }}" class="@error('kondisi') is-invalid @enderror">
                                            @error('kondisi')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="suhu">Suhu Tubuh</label>
                                            <input class="form-control" type="text" name="suhu" value="{{ old('suhu') }}" class="@error('suhu') is-invalid @enderror">
                                            @error('suhu')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Foto Resep</label>
                                            <input class="form-control-file" type="file" name="image" value="{{ old('image') }}" class="@error('image') is-invalid @enderror">
                                            @error('image')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group" align="right">
                                            <input class="btn btn-primary" type="submit" value="Submit">
                                        </div>
                                         
                                </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <body>
        <footer><center>
            Created by Dias Tri Kurniasari 
            </center>   
        </footer> 
        <br>   
</html>