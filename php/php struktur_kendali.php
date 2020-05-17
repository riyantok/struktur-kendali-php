<?php 

// pengulangan
// for
// while
// do..while

for( $i = 0; $i <5; $i++ ) {
	echo "hello world <br>"; 
}


// while
while ( $i < 5) {
	echo "hello world <br>";

$i++;
}

// do..while
$i = 0;
do {
	echo "hello world <br>";
$i++
} while( $i < 5 )

 ?>




 <!doctype html>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		.warna-baris {
 			background-color: silver;
 		}
 	</style>
 </head>
 <body>

 	<table border="1" cellpadding="10" cellspacing="0">
 		<?php for ($i=1; $i <=5 ; $i++) : ?>
 			<?php if ($i % 2 == 1) : ?>
 			<tr class="warna-baris">
 			<?php  else : ?>
 				<?php for($j =1; $j <= 5; $j++) :?>
 					<td><?php echo"$i, $j"?></td>
 			</tr>
 		
 		<?php endfor; ?>
 	</table>
 
 </body>
 </html>


 <?php 
// pengkondisian / percabagan
 // if else
 // if else if else
// ternary
 // switch

 $x = 10
 if( $x < 20) {
 	echo "benar";
 }else if ( $x == 20 ) {
 	echo "bingo";
 }else {
 	echo "salah";
 }

  ?>