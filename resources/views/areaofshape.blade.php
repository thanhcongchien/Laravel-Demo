<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Area of Shapes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h2>Area Of Shapes</h2>
    <div class="container flex">
        <div style="width:40%">
            <h2>Area Of Triangle</h2>
        <form action="" method="post">
                @csrf 
                <div class="form-group">

                        <label for="a">Enter value of A</label>  
                        <input type="number" class="form-control" name="a" id="a" value="{{old('a')}} ">                  
                </div>        
                                <div class="form-group">

                        <label for="h">Enter value of A</label>  
                        <input type="number" lass="form-control" name="h" id="h" value="{{old('h')}} ">                  
                </div>    
                                <div class="form-group">

                        <button type="submit" class="btn btn-danger" name="cal" id="cal" value="">Calculate</button>                  
                </div> 
        </form>
        
        </div>
        <h2>Result: {{$areaTriangle}}</h2>
        
    </div>
    </body>
</html>