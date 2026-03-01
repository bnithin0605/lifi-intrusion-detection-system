<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            setInterval(function(){get_data()},5000);

            function get_data(){
                jQuery.ajax({
                    type:"GET",
                    url:"welcome.php",
                    data:"",
                    beforeSend: function(){
                    },
                    complete: function(data){                        
                    },
                    success: function(data){
                        $("sql").html(data);
                    }
                });
            }
        });
    </script>
</head>
<body>
    
</body>
</html>