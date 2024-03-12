<?php
    include_once 'header.php';
?>
<form method="" action="data_nilai.php" class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
                require_once 'libfungsi.php';

                if (isset($_POST['btn'])){
                $nama = $_POST['fname']
                $matkul =  $POST['matkul']
                $nUTS = $_POST['nUTS'];
                $nUAS = $_POST['nUAS'];
                $nTugas = $_POST['nTugas'];
                $nilai_hasil = number_format(($nUTS + $nUAS + $nTugas) / 3, 2);
                $grades = grade($nilai_hasil);
                $predikat = predikat($grade);
                $lulus = kelulusan ($nilai_hasil);

                echo "<tr>";
                echo "<td>3</td>";
                echo "<td>$nama</td>";
                echo "<td>$matkul</td>";
                echo "<td>$nUTS</td>";
                echo "<td>$nUAS</td>";
                echo "<td>$nTugas</td>";
                echo "<td>$kelulusan</td>";
                echo "<td>$grades</td>";
                echo "<td>$predikat</td>";
                echo "<td>$nilai_hasil</td>";
                echo "<td>$lulus</td?";
                echo "</tr>";
                
                }
                	else {
                        echo "<tr><td colspan = '10' > form belum ada, data muncul setelah klik kirim. </td><tr>";
                    }
          ?>

      </tbody>
  </table>
</div>

<?php
    include_once 'footer.php';
?>