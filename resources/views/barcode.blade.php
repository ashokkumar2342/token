 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <table>
 	<tr> 
 		<td> 
 			<form action="{{ route('barcode.generate') }}" method="post" enctype="multipart/form-data">
 			 {{ csrf_field() }}
 			 <input type="file" name="file">
 			{{-- <textarea name="barcode"></textarea> --}}
 			<input type="submit" value="Save">
 			</form>
 			
 		</td>

 	</tr>
 </table>
         
 </body>
 </html>