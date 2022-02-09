<div class="halaman">
	<table width="500" border="1" cellspacing="0" table border=1 cellpadding=3 align=center>
		<tr>
			<td width="25">No</td>
			<td width="125">NIK</td>
			<td width="250">NAMA</td>
			<td width="250">EMAIL</td>
		</tr>
		<?php
        $no = 1;
        $lines = file('config.txt');
        $file_handle = fopen("config.txt", "rb");
        echo "<h3>Data Pengguna</h3><hr>";
        foreach ($lines as $line_num => $line) {
            $line_of_text = fgets($file_handle);
            $parts = explode('|', $line_of_text);
            echo "<tr>
				<td>$no</td>
				<td align='left' height='30'>$parts[0]</td>
				<td align='left'>$parts[1]</td>
				<td align='left'>$parts[2]</td>
			</tr>";
            $no = $no + 1;
        }
        fclose($file_handle);
        ?>
	</table>
</div>
