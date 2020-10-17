 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	{{-- <img src="data:image/png;base64, {!! $data->image !!}" alt="Red dot" /> --}}
 	@foreach ($datas as $data)

 		 @php
	 	  $image=$data->image;
	 	  $name =$data->id;
	      $image= \Storage::disk('local')->put("image/".$name.'.jpg', $image);
	      $image  =\Storage_path("app/image/".$name.'.jpg');
 		 @endphp
 		  <img src="{{ $image }}" alt="">
 	@endforeach

  
{{-- <img src="data:image/jpg;base64"{{ $data->image }}"/> --}}
         
 </body>
 </html>