<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Dark and Light</title>
 <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
 <section>
  <h1>What is Lorem ipsum ?</h1>
  <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
  <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
 </section>
  <ul>
   <li>
    <span>Dark</span>
    <span>Light</span>
   </li>
  </ul>
 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
 <script type="text/javascript">
  $(document).ready(function(){
   $('ul').click(function(){
    $('ul').toggleClass('active')
    $('section').toggleClass('dark')
   })
  })
 </script>
    
    
    <style>
    
    body {
 margin: 0;
 padding: 0;
 font-family: sans-serif;
}

section {
 position: absolute;
 top: 0;
 left: 0;
 width: 100%;
 height: 100vh;
 box-sizing: border-box;
 padding: 100px;
 transition: 0.5s;
}

section.dark {
 background: #262626;
 color: #fff;
}

ul {
 position: absolute;
 top: 20px;
 right: 20px;
 margin: 0;
 padding: 0;
 width: 100px;
 height: 30px;
 z-index: 1;
 border: 1px solid #000;
 border-radius: 4px;
 cursor: pointer;
 overflow: hidden;
}

ul.active {
 border-color: #fff;
}

ul li {
 list-style: none;
 width: 100%;
 height: 60px;
 text-align: center;
 text-transform: uppercase;
 transition: 0.5s;
}

ul.active li {
 transform: translateY(-30px);
}

ul li span {
 display: block;
 width: 100%;
 height: 30px;
 line-height: 30px;
 color: #262626;
 background: #fff;
}

ul li span:nth-child(1) {
 background: #262626;
 color: #fff;
}
    
    </style>
</body>
</html>
