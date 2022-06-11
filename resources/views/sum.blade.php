<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
        <style>
            .form-group{
                margin-left:50%;
                width:300px;
            }
            form{
                margin-top:20%;
            }
        </style>
    </head>
    <body>

        <form method="post">
            @csrf 
            <div class="form-group">
            <input type="number" class="form-control" name="a" placeholder="enter number a" value="{{old('a'), $a->a}} " >
                @error('a')
                    {{$a}}
                @enderror
            </div>
                        <div class="form-group">
            <input type="number" class="form-control" name="b" placeholder="enter number b" value="{{old('b')}}" > 
                
            </div>
                        <div class="form-group">
            <button type="submit" name="cal" class="btn btn-warning">Calculate</button>
                
            </div>
                        <div class="form-group">
            <input type="number" class="form-control" name="result" placehoder="result" disable="" value="<?php if(isset($sum)){echo $sum;}   ?>">
                
            </div>
        </form>
    </body>
</html>