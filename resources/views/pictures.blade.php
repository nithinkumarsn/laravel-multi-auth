<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="class">
        <div class="row">
            <div class="images">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr><th>#</th>
                        <th>Picture</th>
                    </tr>
                    
                    </thead>
                    <tbody>
                        @foreach($data as $image)
                       <tr><td>{{$image->id}}</td>
                        @once
                           <td> <?php foreach (json_decode($image->image_path)as $picture) { ?>
                                 <img src="{{ asset('/uploads/'.$picture) }}" style="height:120px; width:200px"/>
                                <?php } ?>
                                @endonce
                           </td>
                      </tr>
                      
                        @endforeach

                        {{-- <tr> <img src="{{ asset('/uploads/'. explode(',',$data); }}" style="height:120px; width:200px"/></tr> --}}
                     
                    </tbody>
            </div>
        </div>
    </div>
</body>
</html>