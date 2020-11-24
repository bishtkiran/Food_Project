<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <style>
        *{
            margin:0;
            padding:0;
        }
    body{
        background-image:url("bgnd.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
    
    #p1{
        text-align:center;
        font-size:25px;
        color:white;
        margin-top:40px;
    }
    label{
        display:inline-block;
        width:30px;
        position:relative;
        cursor:pointer;
    }
    label:before{
        content:"\2729";
        
        display:inline-block;
        font-size:30px;
        top:0;
        left:0;
        padding:0 0;
    }
    label:after{
        content:"\2605";
        position:absolute;
        display:inline-block;
        font-size:30px;

        left:0;
        color:yellow;
        opacity:0;
    }
    label:hover:after,
    label:hover ~ label:after,
    input:checked ~ label:after
    {
        opacity:1;
    }
    input[type="radio"]{
        display:none;
    }
    input[type="text"]
    {
        direction:ltr;
        width:250px;
        height:35px;
        border-radius:5px;
    }
    textarea{
        direction:ltr;
        border-radius:8px;
        resize:none;

    }
    ::placeholder{
        direction:ltr;
    }
    .container{
        direction:ltr;
        text-align:center;
        font-size:23px;
        color:#fff;
        
    }
    #p2{
        direction:rtl;
        
    }
    button{
        width:250px;
        height:40px;
        border-radius:10px;
        color:#000;
        font-size:20px;
        font-weight:400;
        
    }
    button:hover{
        background-color:#34c6d3;
    }
    #main{
            width:100%;
            height:100%;
            
        }
        nav{
            width:100%;
            height:80px;
            background-color:#0006;
            line-height:80px;
}

nav ul{
    float:left;
    margin-right:30px;
}
        nav ul li {
            list-style-type: none;
            display:inline-block;
            transition:0.8s all;
        }
        nav ul li a{
            text-decoration:none;
            color:#fff;
            padding:30px;
        }
       
        h1{
            margin-top: 0;
    margin-bottom: 10px
        }
    
    </style>
</head>
<body>
<div id="main">
        <nav>
    
        <ul>
        <a href="home.php" class="navbar-brand">
    <h4 class="px-3" style="color:white ;font-size:25px">
    <i class="fa fa-arrow-circle-left fa-1x" aria-hidden="true"></i>&nbsp;Back</h4>
    </a>
    <a href="#" class="navbar-brand">
    <h1 class="px-5" style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer's Feedback</h1>
    </a>   
            
            
        </ul>
    </nav>
    </div>
<div class="heading">
  
  <p id="p1"> Thank you for choosing us.Please complete the survey that will help us to serve you better in the future.</p>
  </div>

  <div class="container">
    <form action="insertfbk.php"method="post">
      
      <p>Enter your name</p>
      <input type="text"name="name"placeholder="Enter your name">
      
      <p>Enter your email</p>
      <input type="text"name="email"placeholder="Enter your email">
      
      <p>Rate Food Quality<p id="p2">
      <input type="radio"name="rate" id="star-1"value="5"><label for="star-1"></label>
      <input type="radio"name="rate" id="star-2"value="4"><label for="star-2"></label>
      <input type="radio"name="rate" id="star-3"value="3"><label for="star-3"></label>
      <input type="radio"name="rate" id="star-4"value="2"><label for="star-4"></label>
      <input type="radio"name="rate" id="star-5"value="1"><label for="star-5"></label></p>

      <p>Any Comments</p>
      <textarea rows="5"cols="30"name="msg"placeholder="Enter your message"></textarea><br/><br/>
      <button type="submit"name="fbk">Send Feedback</button>
      </form>
    </div>
    
</body>
</html>