<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Pidgin to English </title>   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    </head>
    <body>
        <style> 
            .ibk-c{
                margin-top: 10em;
                /* padding */
            }
            .ibk-c h1{
                font-size: 50px;
                text-align: center;
            }
            p {
                text-align: center;
            }
            .pidgin-box{
                margin-top: 2em;
                background-color: black;
                color: white;
                padding: 2em;
                border-radius: 2em;
            }
            .english-box{
                margin-top: 2em;
                padding: 2em;
                border-radius: 2em;
                width: 100%;
            }
            .submit{
                background-color: white;
                color: black;
                margin-top: 2em;
                align: center;
                padding: 0.8em;
                border: 2px solid black;
                font-size: 20px;
                font-weight: 500;
                text-align: center;
                position: absolute;
                /* top: 50%; */
                left: 50%;
            }
            .next {
                background-color: white;
                color: grey;
                margin-top: 2em;
                align: center;
                padding: 0.4em;
                border: 2px solid grey;
                font-size: 15px;
                font-weight: 300;
                text-align: center;
                position: absolute;
                left: 20%;
            }

        </style>
        <div class="container ibk-c">
            <h1> PIDGIN - ENGLISH TRANSLATOR </h1>
            <p> please enter the english translation of the pidgin text in the box </p>
            <div>
                <h4 class="pidgin-box" > <?= $pidgin ?> </h3>

                <textarea class="english-box" type="text" id="english" placeholder="enter the english translation here..."></textarea>

            </div>
            <em class="counter"> <?= $done ?>/<?= $total ?> </em>

            <button class="submit" id="save" onclick=" save()"> SAVE </button> <button class="next" onclick=" next()"> skip </button>
            
        </div>
        
    </body>
</html>

<script>
    function save(){
        if(isEmpty($("#english").val())){
            alert("enter a valid english translation");
        }
        else {
            var form_data = {
                id: <?= $id ?>,
                english: $("#english").val()
            };
            // console.log(form_data);
            $.ajax({
                url: '/save_english',
                type: "POST",
                data: form_data,		
                dataType: 'json',
                beforeSend: function() {
                    //Change Insert button text to Inserting
                    $("#save").text("Saving..");
                    // console.log(form_data.pidgin)
                }
            })
            .done(function(data) {
                if(data.status == "success") {
                    alert(data.message); 
                    location.reload();
                } else {
                    $("#save").text("SAVE");
                    // console.log(data);
                    alert(data.message);
                }
            })
            .fail(function(data) {
                alert('error');
                console.log(data);
                $("#save").text("SAVE");
            }); 
        }

    }

    function next(){
        location.reload();
    }

    function isEmpty(value){
        if(value == "" || value == "null" || value == undefined){
            return true;
        } 
        else{
            return false;
        } 
    }

  </script>