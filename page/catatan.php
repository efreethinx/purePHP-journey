<div class="halaman">
	<table width="500" border="1" cellspacing="0" table border=1 cellpadding=3 align=center>
		<tr>
			<td width="20">No</td>
			<td width="125">Tanggal</td>
			<td width="75">Waktu</td>
			<td width="180">Tempat</td>
			<td width="100">Suhu Tubuh</td>
		</tr>
		<?php
        $no = 1;
        $lines = file('data_NIK.txt');
        $file_handle = fopen("data_NIK.txt", "rb");
        echo "<h3>Riwayat Perjalanan</h3><hr>";
        foreach ($lines as $line_num => $line) {
            $line_of_text = fgets($file_handle);
            $parts = explode('|', $line_of_text);
            echo "<tr>
				<td>$no</td>
				<td height='30'>$parts[0]</td>
				<td>$parts[1]</td>
				<td align='left'>$parts[2]</td>
				<td>$parts[3]</td>
			</tr>";
            $no = $no + 1;
        }
        fclose($file_handle);
        ?>
	</table>
</div>
