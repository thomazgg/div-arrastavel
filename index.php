<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elemento Div arrastável | JavaScipt </title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <header>Elemento Div arrastável</header>
    <div class="content">
      <div class="icon"><i class='bx bx-move'></i></div>
      <div class="title">Elemento Div arrastável</div>
      <p>Este é um 	&lt;div	&gt; arrastável que é criado usando HTML CSS e JavaScript. Você pode mover este div para qualquer lugar no documento ou página.</p>
    </div>
  </div>
  <script>
    const wrapper = document.querySelector(".wrapper"),
    header = wrapper.querySelector("header");
    function onDrag({movementX, movementY}){
      let getStyle = window.getComputedStyle(wrapper);
      let leftVal = parseInt(getStyle.left);
      let topVal = parseInt(getStyle.top);
      wrapper.style.left = `${leftVal + movementX}px`;
      wrapper.style.top = `${topVal + movementY}px`;
    }
    header.addEventListener("mousedown", ()=>{
      header.classList.add("active");
      header.addEventListener("mousemove", onDrag);
    });
    document.addEventListener("mouseup", ()=>{
      header.classList.remove("active");
      header.removeEventListener("mousemove", onDrag);
    });
  </script>
</body>
</html>