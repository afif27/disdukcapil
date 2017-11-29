<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>laporan</title>
    <style type="text/css">
        h3 {text-align:center; font-size: 20px;}
        h1 {text-align:right; font-size:18px;}

        h2 {font-size:14px;}
        .tengah {text-align:center; }
        .kiri {padding-left:10px;}
        table.nilai {border-collapse: collapse;}
         td {border: 1px solid #000000}
    </style>

</head>
<body>
<h3> Data Pengurusan Akta KElahiran </h3>
<table align="center" border="1" width="100%">   
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama Ayah </th>
                <th>Status Verifikasi </th>
                <th>Tanggal Pengurusan</th>
              
            </tr>

            <?php
if( ! empty ($pemohon)){
    $no = 1;
    foreach($pemohon as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data->nik_ayah."</td>";
        echo "<td>".$data->nama_kep."</td>";
         echo "<td>".format_status_verifikasi($data->status_verifikasi)."</td>";
        echo "<td>".format_tanggal($data->created_at)."</td>";
        echo "</tr>";
        $no++;
    }
}
 else {
                echo "<tr><td>Tidak ada data</td></tr>";
            }
        
?>
            
    </table>


    </body>
    </htmml>
