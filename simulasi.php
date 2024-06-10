<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HostinginAja!</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/simulasi.css" />
</head>
<body>
<div class="container">
              <div class="py-5 text-center">
                    <h2>HostinginAja!</h2>
                    <p class="lead">Silahkan mengisi form berikut untuk cek estimasi cicilan layanan anda</p>
              </div>
        </div>
    </section>
    <section>
    <div class="form_center">
        <form enctype="multipart/form-data" action="terimasimulasi.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                <table>
                    <tr>
                        <td>Jenis Layanan</td>
                        <td> :
                            <select name="TBARANG">
                                <option value="Domain">Domain</option>
                                <option value="Hosting">Hosting</option>
                                <option value="VPS">VPS</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Paket</td>
                        <td> : <input type="text" name="MERK" value=""</></td>
                    </tr>
                    <tr>
                        <td>Harga Layanan</td>
                        <td> : <input type="text" name="HBARANG" value=""</></td>
                    </tr>
                    <tr>
                        <td>Uang Muka</td>
                        <td> : <input type="text" name="DP"</></td>
                        <td>%</td>
                    </tr>
                    <tr>
                        <td>Bunga per Tahun</td>
                        <td> :
                            <select name="BUNGA">
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            %
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>Uang Muka</td>
                        <td> :
                            <select name="DP">
                                <option value="0.30">30%</option>
                                <option value="0.50">50%</option>
                                <option value="0.75">75%</option>
                                <option value="0.10">100%</option>
                            </select>
                        </td>
                    </tr> -->
                    <tr>
                        <td>Jangka Waktu</td>
                        <td> :
                            <select name="TENOR">
                                <option value="12">1 Tahun</option>
                                <option value="24">2 Tahun</option>
                                <option value="36">3 Tahun</option>
                                <option value="48">4 Tahun</option>
                                <option value="60">5 Tahun</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> 
                            <input type="submit" name="input" value="HITUNG"</>
                            <input type="reset" name="clear" value="ULANGI"</>
                    </tr>
                </table>
            </form>
        </div>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2023 HostinginAja!</p>
            <?php
            $today = date("l, d F Y - h:i:s a");
            ?> 
            <?=$today?></p>
    </footer>
</body>
</html>