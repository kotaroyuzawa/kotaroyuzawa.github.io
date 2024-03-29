<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Kotaro Yuzawa | About</title>
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <div class="contact">
      <div class="contact__info">
        <h6 class="contact__name">Kotaro Yuzawa</h6>
        <div class="contact__component">
          <i class="fa-solid fa-phone"></i>
          <h6>Telefon: 017626121463</h6>
        </div>
        <div class="contact__component">
          <i class="fa-solid fa-envelope"></i>
          <h6>E-Mail: ktr.yzw@gmail.com</h6>
        </div>
        <div class="contact__component">
          <i
            class="fa-solid fa-location-dot"
            style="font-size: 22px; padding: 9px 11.5px"
          ></i>
          <h6>Adresse: Wilhelmsburgerstraße 77, 20539 Hamburg</h6>
        </div>
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe
              width="350"
              height="270"
              id="gmap_canvas"
              src="https://maps.google.com/maps?q=wilhelmsburgerstra%C3%9Fe%2077,%20hamburg%20&t=&z=11&ie=UTF8&iwloc=&output=embed"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
            ></iframe
            ><br /><style>
              .mapouter {
                position: relative;
                text-align: right;
                height: 270px;
                width: 350px;
              }</style
            ><a href="https://www.embedgooglemap.net">embedgooglemap.net</a
            ><style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 270px;
                width: 350px;
              }
            </style>
          </div>
        </div>
      </div>
      <div class="contact__form">
        <form action="">
            <h1>Kontaktieren Sie mich!</h1>
            <input type="text" id="name" placeholder="  Name" required> 
            <input type="email" id="email" placeholder="  E-Mail" required>
            <textarea id="message" cols="30" rows="5" placeholder="  Ihre Nachricht" required></textarea>
            <button type="submit" id="submit">Nachricht senden</button>
        </form>
        </div>
      </div>
    </div>

    <footer id="footer">
      <div class="footer__container">
        <h5>Konnte ich Ihr Interesse wecken? Kontaktieren Sie mich!</h5>
        <button class="kontakt-btn"><a href="contact.html">Contact</a></button>
        <small class="copyright"
          >&#169;All copyright reserved to Kotaro Yuzawa 2022</small
        >
      </div>
    </footer>
  </body>
</html>
