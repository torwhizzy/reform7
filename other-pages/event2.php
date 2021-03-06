<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:400,400i,600,600i,700,700i|Barlow+Semi+Condensed:400,400i,600,600i,700,700i|Lato:300,300i,400,400i,700,700i|Montserrat:300,300i,400,400i,700,700i" rel="stylesheet"> 
<link rel="stylesheet" href="../_assets/fonts/icons/styledf19.css?t=20180427142120%20?>" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="../_assets/css/bootstrapc462.css?t=20180822173258" />
<link rel="stylesheet" href="../_assets/css/mainf671.css?t=20200416232632" />

<link rel="icon" href="../_assets/img/logos/reform logo.jpg">
<link rel="apple-touch-icon-precomposed" href="_assets/img/favicons/favicon-1525e1f.png?v=2">
      <title>Document</title>
    <style>
        *, :before, :after {
  font-family: inherit;
  box-sizing: inherit;
  transition-property: none;
  transition-duration: 300ms;
}

.body {
  box-sizing: border-box;
  font-family: "Karla", "Noto Sans", "Noto Sans CJK TC", sans-serif;
  background-color: #eeeeee;
  display: flex;
  flex-direction: column;
  align-items: center;
}


p {
  max-width: 600px;
}

.e-container {
  width: calc(100% - 200px);
  margin: 50px 100px;
  padding: 50px;
  padding-top: 0;
  min-width: 500px;
  border-radius: 5px;
  background-color: #ffffff;
}
.e-container .e-hero {
  width: calc(100% + 100px);
  margin-left: -50px;
  display: flex;
  justify-content: space-between;
}
.e-container .e-hero .hero_image {
  height: 300px;
  flex-grow: 1;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
.e-container .e-hero .hero_info {
  width: 500px;
  padding: 25px;
}
.e-container .e-hero .hero_info .hero_date .hero_date_day {
  font-size: 1.2em;
}
.e-container .e-hero .hero_info .hero_date .hero_date_month {
  text-transform: uppercase;
}
.e-container .e-sticky {
  display: flex;
  justify-content: space-between;
  width: calc(100% + 100px);
  height: 50px;
  overflow: hidden;
  margin-left: -50px;
  padding: 5px;
  padding-left: 50px;
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.e-container .e-sticky .sticky_register-button {
  cursor: pointer;
  background: green;
  color: #ffffff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  display: block;
}
.e-container .e-sticky .initially-invisible {
  opacity: 0;
}
.e-container.e-sticky-stuck .e-sticky {
  position: fixed;
  top: 0;
  left: 0;
  margin-left: 110px;
  background: #ffffff;
  width: calc(100% - 220px);
}
.e-container.e-sticky-stuck .e-sticky .initially-invisible {
  opacity: 1;
}
.e-container.e-sticky-stuck .e-hero {
  margin-bottom: 50px;
}
.e-container .event-content {
  display: flex;
}
.e-container .event-content .event-description {
  flex-grow: 1;
}
.e-container .event-content aside {
  width: 300px;
  padding-left: 50px;
}
.e-container .organizer-about {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.e-container .map {
  background: #f0f0f0;
}
.e-container .map iframe {
  width: 100%;
  height: 350px;
}
.e-hero{
    display: flex;
    flex-direction: row;
  }
  @media only screen and (max-width: 620px) {
  /* For mobile phones: */
  .e-container, .e-her0, .hero_info, .hero-image {
    flex-direction: column;
    width: 100%;
  }
}
.hero_image{
  background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),url(../_assets/img/layouts/project3.jpg);
  height: 700px;
  width: 500px;
}
.autoft{
  max-width: 100%;
  max-height: 100%;
}
/* marquee */

.m-body {
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f0f0f0;
}

.m-outer {
  display: flex;
  height: 100px;
  align-items: center;
  position: relative;
}

.m-container {
  height: 100%;
  perspective: 700px;
  position: relative;
  perspective-origin: 50% 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 400px;
}

.m-item {
  position: absolute;
  animation-duration: 2.5s;
  animation-fill-mode: backwards;
  animation-timing-function: ease;
  z-index: 100;
  backface-visibility: hidden;
  font-size: 50px;
  white-space: nowrap;
  visibility: hidden;
  border-bottom: 2px solid black;
  border-top: 2px solid black;
  transform-style: preserve-3d;
}

.animate {
  visibility: visible;
  animation-name: animate;
}

.m-inner {
  transform: translateZ(-50px);
  transform-style: preserve-3d;
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

@keyframes animate {
  0% {
    transform: rotateX(-90deg) translateZ(50px);
  }
  6% {
    transform: rotateX(10deg) translateZ(50px);
  }
  12% {
    transform: rotateX(-5deg) translateZ(50px);
  }
  18% {
    transform: rotateX(1.5deg) translateZ(50px);
  }
  24% {
    transform: rotateX(0deg) translateZ(50px);
  }
  82% {
    transform: rotateX(0deg) translateZ(50px);
  }
  88% {
    transform: rotateX(5deg) translateZ(50px);
  }
  94% {
    transform: rotateX(-10deg) translateZ(50px);
  }
  100% {
    transform: rotateX(90deg) translateZ(50px);
  }
}
.m-static {
  font-size: 28px;
}

    </style>
</head>
<body>
<div class="m-body">
<div class="m-outer">
<div class="m-static">Please Don't miss our next event</div>
	<div class="m-container">
		<div class="m-inner">
			<div class="m-item">frontend dev</div>
			<div class="m-item">ux engineer</div>
			<div class="m-item">cat lover</div>
		</div>
	</div>
</div>
</div>
  <section class="body">

    <div class="e-container"> 
      <div class="e-hero">
        <div class="hero_image">
        <img class="autoft" src="../_assets/img/layouts/p.jpg" style="max-width: 100%;" alt="">
        </div>
        <div class="hero_info">
          <div class="hero_date">
            <div class="hero_date_day">20</div>
            <div class="hero_date_month">Jul</div>
          </div>
          <h1 class="hero_title">My Fun Event</h1>
          <div class="hero_organizer">Tai-man Chan</div>
          <div class="hero_price">Free</div>
        </div>
      </div>
      <div class="e-sticky" style="height:100px">
        <div class="sticky_left">

          <div class="sticky_title initially-invisible">
          <div class="m-body">
<div class="m-outer">
<div class="m-static">Please Don't miss our next event</div>
	<div class="m-container">
		<div class="m-inner">
			<div class="m-item">frontend dev</div>
			<div class="m-item">ux engineer</div>
			<div class="m-item">cat lover</div>
		</div>
	</div>
</div>
</div>
</div>
         
         
        </div>
        <div class="sticky_right">
          <button class="sticky_register-button">Register now</button>
        </div>
      </div>
      <div class="event-content">
        <div class="event-description">
          <h2>Description</h2>
          <p>Consectetur voluptate enim omnis eaque aliquam minus inventore cumque. Nobis aliquam voluptatibus eos. Nihil non at ea. Alias repudiandae non aut voluptatem nemo nesciunt. Dolorem id ad soluta consequatur voluptatibus. Incidunt cupiditate quam voluptatem.</p>
          <p>Minima et voluptas accusamus quidem eum pariatur perspiciatis. Voluptas recusandae mollitia sint explicabo sed eos. Dolores et eos repellat saepe et quidem nihil.</p>
          <p>Aliquid iste aliquid debitis cupiditate nulla in. Iste ut nihil sit repellendus. Sapiente quia labore voluptates voluptatem. Delectus qui voluptas facilis placeat. Sed ut tenetur qui debitis voluptate. Tempora aut dolore magnam fuga quo sit saepe.</p>
        </div>
        <aside class="event-details">
          <h2>Date and time</h2>
          <p>Sun Aug 20 2017 13:00:00 GMT+0000 (GMT) - <br>Sun Aug 20 2017 14:30:00 GMT+0000 (GMT)</p><a href="https://calendar.google.com/calendar/render?action=TEMPLATE&amp;text=My%20Fun%20Event&amp;dates=20170820T130000Z/20170820T143000Z&amp;location=The%20Chinese%20University%20of%20Hong%20Kong%2C%20Sha%20Tin%2C%20New%20Territories%2C%20Hong%20Kong&amp;sf=true&amp;output=xml" target="_blank">Add to Google Calendar</a>
          <h2>Location</h2>
          <p>The Chinese University of Hong Kong, Sha Tin, New Territories, Hong Kong</p>
        </aside>
      </div>
      <div class="organizer-about">
        <h2>Tai-man Chan</h2>
        <p class="subtitle">Organizer of My Fun Event</p>
        <p>Consectetur voluptate enim omnis eaque aliquam minus inventore cumque. Nobis aliquam voluptatibus eos. Nihil non at ea. Alias repudiandae non aut voluptatem nemo nesciunt. Dolorem id ad soluta consequatur voluptatibus. Incidunt cupiditate quam voluptatem.</p><a href="http://example.com" target="_blank">http://example.com</a>
      </div>
      <div class="map">
        <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.3459330740984!2d7.922290513748719!3d5.0475447963362745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105d57394a5b1683%3A0x1c01be15d79b1e13!2sLimelight%20Technology!5e0!3m2!1sen!2sng!4v1621710820573!5m2!1sen!2sng" allowfullscreen="true" ></iframe>
      </div>
    </div>
    <div class="footer">
      <p>&copy 2017 Example Ltd. All rights reserved.</p>
    </div>
    
  </section>
  <?php
 require_once'../includes/footer.php';
?>
    <script type="text/javascript">
    var stickyElem = document.querySelector(".e-sticky");
var heroElem = document.querySelector(".e-hero");
var containerElem = document.querySelector(".e-container");

setInterval(function() {
  var heroElemRect = heroElem.getClientRects()[0];

  if (heroElemRect.bottom < 0) {
    containerElem.classList.add("e-sticky-stuck");
  } else {
    containerElem.classList.remove("e-sticky-stuck");
  }
}, 50);

// marquee

const items = Array.from(document.getElementsByClassName('m-item'));

items.forEach((item,i) => {
	let prev = items[i-1];
	if (!prev) prev = items[items.length - 1];
	
	prev.addEventListener('animationend',()=>{
		item.classList.add('animate');
		prev.classList.remove('animate');
	});
})

items[0].classList.add('animate');
    </script>
</body>
</html>