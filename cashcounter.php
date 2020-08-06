<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. KST - CASH COUNTER</title>
    <link rel="icon" href="assets/Logo.png">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script>   
        var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function(e){
            rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        // Function Format Rupiah 
        function formatRupiah(angka, prefix){
	        var number_string = angka.replace(/[^,\d]/g, '').toString(),
	        split   		= number_string.split(','),
	        sisa     		= split[0].length % 3,
	        rupiah     		= split[0].substr(0, sisa),
	        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
	        if(ribuan){
		        separator = sisa ? '.' : '';
		        rupiah += separator + ribuan.join('.');
	        }
 
	        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        // Function inputan just number
        function justNumber(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
  
    </script>
</head>

<body>
<main>
    <form action="" method="POST">
    <h1><img class = "kiri" src="assets/Logo.png" alt=""><p>C A S H<br>C O U N T E R</p></h1>
		<table>
            <tr>
                <td colspan="5">
					<input type="number" name="uang" id="rupiah" placeholder="Masukkan Nominal Uang" autocomplete="off" onkeypress="return justNumber(event)">
                    </input><button name="hitung" id="submit">Submit</button>
                    <?php
                        error_reporting(0);
                        if(isset($_POST["hitung"])){
                            $Uang=$_POST["uang"];

                            $Pecahan1=$Uang/100000;
                            $Sisa1=$Uang%100000;

                            $Pecahan2=$Sisa1/50000;
                            $Sisa2=$Sisa1%50000;

                            $Pecahan3=$Sisa2/20000;
                            $Sisa3=$Sisa2%20000;

                            $Pecahan4=$Sisa3/10000;
                            $Sisa4=$Sisa3%10000;

                            $Pecahan5=$Sisa4/5000;
                            $Sisa5=$Sisa4%5000;

                            $Pecahan6=$Sisa5/2000;
                            $Sisa6=$Sisa5%2000;

                            $Pecahan7=$Sisa6/1000;
                            $Sisa7=$Sisa6%1000;

                            $Pecahan8=$Sisa7/500;
                            $Sisa8=$Sisa7%500;

                            $Pecahan9=$Sisa8/200;
                            $Sisa9=$Sisa8%200;

                            $Pecahan10=$Sisa9/100;
                            $Sisa10=$Sisa9%100;

                            $Pecahan11=$Sisa10/50;
                            $Sisa11=$Sisa10%50;

                            $Pecahan12=$Sisa11/25;
                            $Sisa12=$Sisa11%25;

                            $Pecahan13=$Sisa12/1;
                            $Sisa13=$Sisa12%1;
                        }   
                    ?>
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <th>100.000,-</th>
                <th>50.000,-</th>
                <th>20.000,-</th>
			</tr>
			<tr>
				<td id="Id0">
                    <?php
                        echo''.(int) $Pecahan1.' Lembar';
                        echo '<br/>';
                    ?>
                </td>
				<td id="Id1">
                    <?php
                        echo''.(int) $Pecahan2.' Lembar';
                        echo '<br/>';
                    ?>
                </td>
				<td id="Id2">
                    <?php
                        echo''.(int) $Pecahan3.' Lembar';
                        echo '<br/>';
                    ?>
                </td>
			</tr>
            <tr>
                <th>10.000,-</th>
                <th>5.000,-</th>
				<th>2.000,-</th> 
			</tr>
			<tr>
                <td id="Id3">
                    <?php
                        echo''.(int) $Pecahan4.' Lembar';
                        echo '<br/>';
                    ?>
                </td>
				<td id="Id4">
                    <?php
                        echo''.(int) $Pecahan5.' Lembar';
                        echo '<br/>';
                    ?>
                </td>
				<td id="Id5">
                    <?php
                        echo''.(int) $Pecahan6.' Lembar';
                        echo '<br/>';
                    ?>
                </td>
			</tr>
            <tr>
                <th>1.000,-</th>
                <th>500,-</th>
				<th>200,-</th> 
            </tr>
            <tr>
                <td id="Id6">
                    <?php
                        echo''.(int) $Pecahan7.' Lembar';
                        echo '<br/>';
                    ?>
                </td>
				<td id="Id7">
                    <?php
                        echo''.(int) $Pecahan8.' Koin';
                        echo '<br/>';
                    ?>
                </td>
				<td id="Id8">
                    <?php
                        echo''.(int) $Pecahan9.' Koin';
                        echo '<br/>';
                    ?>
                </td>
			</tr>
			<tr>
				<th>100,-</th>
				<th>50,-</th>
                <th>25,-</th>
			</tr>
			<tr>
				<td id="Id9">
                    <?php
                        echo''.(int) $Pecahan10.' Koin';
                        echo '<br/>';
                    ?>
                </td>
				<td id="Id10">
                    <?php
                        echo''.(int) $Pecahan11.' Koin';
                        echo '<br/>';
                    ?>
                </td>
				<td id="Id11">
                    <?php
                        echo''.(int) $Pecahan12.' Koin';
                        echo '<br/>';
                    ?>
                </td>
			</tr>
            <tr>
                <th colspan="5">1,-</th>
			</tr>
			<tr>
				<td colspan="5" id="Id12">
                    <?php
                        echo''.(int) $Pecahan13.' Koin';
                        echo '<br/>';
                    ?>
                </td>
			</tr>
        </table>
    </form>
</main>
</body>
</html>
