
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loadstyle.css">
    <link rel="stylesheet" href="style_home.css">
    <title>MICRO</title>
    <script src="https://use.typekit.net/jrj6out.js"></script>
  <script>try{Typekit.load({ async: false });}catch(e){}</script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r78/three.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="jquery.min.js"></script>
  <link rel="stylesheet" href="style1.css">

<style type="text/css">
    $screen-sm-min: 860px;
    $screen-md-min: 992px;
    $screen-lg-min: 1200px;

@mixin breakpoint($point) {
    @if $point == $screen-sm-min {
        @media screen and (min-width: $screen-sm-min) {
            @content;
        }
    }
    @elseif $point == $screen-md-min {
        @media screen and (min-width: $screen-md-min) {
            @content;
        }
    }
    @elseif $point == $screen-lg-min {
        @media screen and (min-width: $screen-lg-min) {
            @content;
        }
    }
}

body {
    position: relative;
    margin: 0;
    overflow: hidden;
}

.intro-container {
    position: absolute;
    top: 30%;
    transform: translateY(-50%);
    color: white;
    text-align: center;
    right: 0;
    left: 0;
}
.intro{
    font-family: 'brandon-grotesque', sans-serif;
    font-weight: bold;
    margin-top: 30px;
    margin-bottom: 0;
    font-size: 50px;
    padding: 0px;
}
.text{
  margin-top: 50px;
  color: white
  text-border:5px solid red;
  z-index: 9999;
}
.fancy-text {
    font-family: 'adobe-garamond-pro', sans-serif;
    font-style: italic;
    letter-spacing: 10px;
    padding: 60px;
}

.button {
    position: relative;
    cursor: pointer;
    display: inline-block;
    font-family: 'brandon-grotesque', sans-serif;
    text-transform: uppercase;
    min-width: 200px;
    z-index: 999999999999999;
    margin-top: 30px;

    &:hover {
        .border {
            box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 1);
            .left-plane,
            .right-plane {
                transform: translateX(0%);
            }
        }

        .text {
            color: #121212;
        }
    }

    .border {
        border: 5px solid red;
        transform: skewX(-20deg);
        height: 32px;
        border-radius: 3px;
        overflow: hidden;
        position: relative;
        transition: 0.1s ease-out;


    }

    .text {
        position: absolute;
        left: 0;
        right: 0;
        top: 50%
        transition: 0.15s ease-out;
    }
}

.banner{
  display: none;
}
@media (max-width: 768-px) {
    .banner {
        min-height: calc(100vh - 294px);

    }
 }
 @media screen and (max-width:480px) {
  .canvas{
    width: 100%;
  }
    
 }

.x-mark {
    right: 10px;
    top: 10px;
    position: absolute;
    cursor: pointer;
    opacity: 0;

    &:hover {
        .right {
            transform: rotate(-45deg) scaleY(1.2);
        }

        .left {
            transform: rotate(45deg) scaleY(1.2);
        }
    }

    .container {
        position: relative;
        width: 20px;
        height: 20px;
    }

    .left,
    .right {
        width: 2px;
        height: 20px;
        background: white;
        position: absolute;
        border-radius: 3px;
        transition: 0.15s ease-out;
        margin: 0 auto;
        left: 0;
        right: 0;
    }

    .right {
        transform: rotate(-45deg);
    }

    .left {
        transform: rotate(45deg);
    }
}

.sky-container {
    position: absolute;
    color: white;
    text-transform: uppercase;
    margin: 0 auto;
    right: 0;
    left: 0;
    top: 40px;
    padding: 30px 0;
    text-align: center;
    opacity: 0;
    @include breakpoint($screen-sm-min) {
        top: 18%;
        right: 12%;
        left: auto;
    }

    &__left,
    &__right {
        display: inline-block;
        vertical-align: top;
        font-weight: bold;

        h2 {
            font-family: 'brandon-grotesque', sans-serif;
            font-size: 26px;
            line-height: 26px;
            margin: 0;
            @include breakpoint($screen-sm-min) {
                font-size: 72px;
                line-height: 68px;
            }
        }
    }

    &__left {
        margin-right: 5px;
    }

    .thirty-one {
        letter-spacing: 4px;
    }
}

.text-right {
    text-align: right;
}

.text-left {
    text-align: left;
}

</style>



</head>
<body onload="myfunction()">
<div id='preloader'>
<div class="loader">
  <div class="loader-inner">
    <div class="loader-line-wrap">
      <div class="loader-line"></div>
    </div>
    <div class="loader-line-wrap">
      <div class="loader-line"></div>
    </div>
    <div class="loader-line-wrap">
      <div class="loader-line"></div>
    </div>
    <div class="loader-line-wrap">
      <div class="loader-line"></div>
    </div>
    <div class="loader-line-wrap">
      <div class="loader-line"></div>
    </div>
  </div>
</div>
</div>


<!-- This pen isn't a fan of small view heights, check it out in  fullpage view for optimal viewing  -->
 <div class="canvas">
  <div class="x-mark">
    <div class="container">
      <div class="left"></div>
      <div class="right"></div>
    </div>
  </div>
  <div class="intro-container">
    <h4 class="intro">MICRO <br>WEIGH EQUIPMENTS</h4>

    <div class="button shift-camera-button"> 
      <div class="text"></div>
    </div>
  </div>
  <div class="banner" id="banner">
        <div class="navebar">
            <a href="#"><img class="logo" src="logo.jpg" loading="lazy"  width="60px" height="60px"></a>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="displayCustomer.php">Customer</a></li>
                <li><a href="stampList.php">Stamp list</a></li>
                <li><a href="selectStockArea.php">Stock Register</a></li>
                <li><a href="select-taluk.php">Area Wise</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="container">
                <h1>MICRO WEIGH EQUIPMENTS</h1>
            
            </div>
            <p><h2>Weighing machine <br> Sales & Service</h2> </p>
            <div>
                <button type="button" onclick="window.location.href = 'customer.php';"><span></span><h3>Add Customer</h3></button>
                <button type="button" onclick="window.location.href = 'select-taluk.php';"> <span></span><h3>Stamping List</h3></button>
            </div>
        </div>
    </div>
  
</div>




    
    <script>





"use strict";
/* globals THREE, $, TweenLite, Power3, TimelineMax  */

let camera, scene, renderer;
let plane;
let raycaster = new THREE.Raycaster();
let normalizedMouse = {
  x: 0,
  y: -180
};

// let lightBlue = {
//  r: 34,
//  g: 183,
//  b: 236
// };

let darkBlue = {
  r: 0,
  g: 52,
  b: 74
};

let baseColorRGB = darkBlue;
let baseColor = "rgb(" + baseColorRGB.r + "," + baseColorRGB.g + "," + baseColorRGB.b + ")";
let nearStars, farStars, farthestStars;


function init() {
  scene = new THREE.Scene();
  camera = new THREE.PerspectiveCamera( 75, window.innerWidth/window.innerHeight, 0.1, 1000 );
  renderer = new THREE.WebGLRenderer();



  // Scene initialization
  camera.position.z = 50;
  

  renderer.setClearColor( "#121212", 1.0);
  renderer.setSize( window.innerWidth, window.innerHeight );
  renderer.setPixelRatio( window.devicePixelRatio );

  document.body.appendChild( renderer.domElement );

  // Lights
  let topLight = new THREE.DirectionalLight(0xffffff, 1);
  topLight.position.set(0,1,1).normalize();
  scene.add(topLight);

  let bottomLight = new THREE.DirectionalLight(0xffffff, 0.4);
  bottomLight.position.set(1,-1,1).normalize();
  scene.add(bottomLight);

  let skyLightRight = new THREE.DirectionalLight(0x666666, 0.2);
  skyLightRight.position.set(-1,-1,0.2).normalize();
  scene.add(skyLightRight);

  let skyLightCenter = new THREE.DirectionalLight(0x666666, 0.2);
  skyLightCenter.position.set(-0,-1,0.2).normalize();
  scene.add(skyLightCenter);

  let skyLightLeft = new THREE.DirectionalLight(0x666666, 0.2);
  skyLightLeft.position.set(1,-1,0.2).normalize();
  scene.add(skyLightLeft);



  // Mesh creation
  let geometry = new THREE.PlaneGeometry(400, 400, 70, 70);
  let darkBlueMaterial = new THREE.MeshPhongMaterial( { color: 0xffffff, shading: THREE.FlatShading, side: THREE.DoubleSide, vertexColors: THREE.FaceColors} );

  geometry.vertices.forEach(function(vertice) {
    vertice.x += (Math.random() - 0.5) * 4;
    vertice.y += (Math.random() - 0.5) * 4;
    vertice.z += (Math.random() - 0.5) * 4;
    vertice.dx = Math.random() - 0.5;
    vertice.dy = Math.random() - 0.5;
    vertice.randomDelay = Math.random() * 5;
  });

  for ( var i = 0; i < geometry.faces.length; i ++ ) {
      geometry.faces[ i ].color.setStyle( baseColor );
    geometry.faces[ i ].baseColor =  baseColorRGB;    
  }


  plane = new THREE.Mesh( geometry, darkBlueMaterial );
  scene.add( plane );



  // Create stars 
  farthestStars = createStars(1200, 420, "#0952BD");
  farStars = createStars(1200, 370, "#A5BFF0");
  nearStars = createStars(1200, 290,"#118CD6");

  scene.add(farthestStars);
  scene.add(farStars);
  scene.add(nearStars);

  farStars.rotation.x = 0.25; 
  nearStars.rotation.x = 0.25; 

  // Uncomment for testing second camera position
  // camera.rotation.x = Math.PI / 2;
  // camera.position.y = -0;
  // camera.position.z = 20;
  // plane.scale.x = 2;

}


function createStars(amount, yDistance, color = "0x000000") {
  let opacity = Math.random();
  let starGeometry = new THREE.Geometry();
  let starMaterial = new THREE.PointsMaterial({color: color, opacity: opacity});

  for (let i = 0; i < amount; i++) {
    let vertex = new THREE.Vector3();
        vertex.z = (Math.random() - 0.5) * 1500;
        vertex.y = yDistance;
        vertex.x = (Math.random() - 0.5) * 1500;

        starGeometry.vertices.push(vertex);
  } 


    return new THREE.Points(starGeometry, starMaterial);
}
let timer = 0;


function render() {
  requestAnimationFrame( render );


  timer += 0.01;
  let vertices = plane.geometry.vertices;

  for (let i = 0; i < vertices.length; i++) {
    // Ease back to original vertice position while still maintaining sine wave
    vertices[i].x -= (Math.sin(timer + vertices[i].randomDelay) / 40) * vertices[i].dx;
    vertices[i].y += (Math.sin(timer + vertices[i].randomDelay) / 40) * vertices[i].dy;
    // ((vertices[i].x - vertices[i].originalPosition.x) * 0.1) + 
  }

  // Determine where ray is being projected from camera view
  raycaster.setFromCamera(normalizedMouse, camera);

  // Send objects being intersected into a variable
  let intersects = raycaster.intersectObjects([plane]);

  if (intersects.length > 0) {

      let faceBaseColor = intersects[0].face.baseColor;

      plane.geometry.faces.forEach(function(face) {
        face.color.r *= 255;
        face.color.g *= 255;
        face.color.b *= 255;

        face.color.r += (faceBaseColor.r - face.color.r) * 0.01;
        face.color.g += (faceBaseColor.g - face.color.g) * 0.01;
        face.color.b += (faceBaseColor.b - face.color.b) * 0.01;

        let rInt = Math.floor(face.color.r);
        let gInt = Math.floor(face.color.g);
        let bInt = Math.floor(face.color.b);

        let newBasecol = "rgb(" + rInt + "," + gInt + "," + bInt + ")";
        face.color.setStyle(newBasecol);
      });
      plane.geometry.colorsNeedUpdate = true;

      intersects[0].face.color.setStyle("#006ea0");
      plane.geometry.colorsNeedUpdate = true;

  }

    

  plane.geometry.verticesNeedUpdate = true;
  plane.geometry.elementsNeedUpdate = true;

  farthestStars.rotation.y -= 0.00001;
  farStars.rotation.y -= 0.00005;
  nearStars.rotation.y -= 0.00011;


  renderer.render(scene, camera);
}

init();

window.addEventListener("resize", function() {

  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize( window.innerWidth, window.innerHeight );

});

window.addEventListener("mousemove", function(event) {

  // Normalize mouse coordinates
  normalizedMouse.x = (event.clientX / window.innerWidth) * 2 - 1;  
  normalizedMouse.y = -(event.clientY / window.innerHeight) * 2 + 1;  

});

let introContainer = $('.intro-container');
let skyContainer = $('.sky-container');
let xMark = $('.x-mark');
let banner = $('.banner');



$('.intro-container').click(function() {
  let introTimeline = new TimelineMax();
  

  introTimeline.add([
    TweenLite.fromTo(introContainer, 0.5, {opacity: 1}, {opacity: 0, ease: Power3.easeIn}),
    TweenLite.to(camera.rotation, 3, {x: Math.PI / 2, ease: Power3.easeInOut}),
    TweenLite.to(camera.position, 2.5, {z: 20, ease: Power3.easeInOut}),
    TweenLite.to(camera.position, 3, {y: 120, ease: Power3.easeInOut}),
    TweenLite.to(plane.scale, 3, {x: 2, ease: Power3.easeInOut}),
  ]);

  introTimeline.add([
    TweenLite.to(xMark, 2, {opacity: 1, ease: Power3.easeInOut}),
    TweenLite.to(skyContainer, 2, {opacity: 1, ease: Power3.easeInOut})
  ]);
  var bannerStyle=document.getElementById('banner');
  bannerStyle.style.display='inline';
});


$('.x-mark').click(function() {
  let outroTimeline = new TimelineMax();
  var bannerStyle=document.getElementById('banner');
  bannerStyle.style.display='none';
  
  outroTimeline.add([
    TweenLite.to(xMark, 0.5, {opacity: 0, ease: Power3.easeInOut}),
    TweenLite.to(xMark, 0.5, {opacity: 0, ease: Power3.easeInOut}),
    TweenLite.to(skyContainer, 0.5, {opacity: 0, ease: Power3.easeInOut}),
    TweenLite.to(camera.rotation, 3, {x: 0, ease: Power3.easeInOut}),
    TweenLite.to(camera.position, 3, {z: 50, ease: Power3.easeInOut}),
    TweenLite.to(camera.position, 2.5, {y: 0, ease: Power3.easeInOut}),
    TweenLite.to(plane.scale, 3, {x: 1, ease: Power3.easeInOut}),
  ]);

  outroTimeline.add([
    TweenLite.to(introContainer, 0.5, {opacity: 1, ease: Power3.easeIn}),
  ]);
});

render();
    
        var preloader1=document.getElementById('preloader');
        
        function myfunction(){
            preloader1.style.display='none';
        }
    </script>
</body>
</html>
