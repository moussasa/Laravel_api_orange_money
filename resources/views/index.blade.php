<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Laravel_api_orange_money</title>
  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    .img{
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    .img img{
      width: 200px;
      height: 200px;
      border-radius: 7px;
      margin: 2vh 0;
    }
    .img a{
      text-decoration: none;
      background-color: skyblue;
      color: white;
      padding: 10px;
      border-radius: 8px;
    }
    .img a:hover{
      background-image: linear-gradient(yellow,rgb(0, 183, 255));
      color: black;
    }
  </style>
</head>
<body>
  
  <div class="img">
    <img src="https://th.bing.com/th/id/OIP.lAlljEK7F4y3Qqbn3Ag-ngHaHa?w=129&h=180&c=7&r=0&o=5&pid=1.7" alt="">
    <p>Prix: 200 000 FCFA</p>
    <a href="{{route('orange_payement_link')}}">Payer</a>
  </div>

</body>
</html>