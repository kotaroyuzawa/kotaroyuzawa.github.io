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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Kotaro Yuzawa | Quereinstieg</title>
  </head>
  <body>
   <?php include 'nav.php'; ?>
    <header class="header">
      <h3 class="page-title">Quereinstieg</h3>
    </header>
    <div class="quer">
      <section class="section-container">
        <div class="overview">
          <h1 class="overview__title">
            Wie ich auf die Idee kam, in die IT-Branche quer einzusteigen
          </h1>
          <div class="section-img">
            <img src="img/thinking.jpg" alt="contamplation" />
          </div>
        </div>
        <div class="quer__text">
          <p >
            Nach meinem Studienabschluss musste ich bei der Jobsuche als jemand, der in Deutschland keine richtige Berufserfahrung hat, Schwierigkeiten erleben. Das Gefühl, nicht gebraucht zu werden, hat mich fertig gemacht. Nun musste ich mir die Frage stellen, wo ich überhaupt gebraucht werden kann. Meine Antwort war simpel: Wenn ich noch nicht gebraucht bin, muss ich mir nur noch neue Fähigkeiten aneignen, damit ich gebraucht werde. Ich war der festen Überzeugung, dass ich lernfähig und ein sehr neugieriger Mensch bin und im Allgemeinen Spaß am Lernen haben kann. Deswegen musste ich mir nicht lange überlegen, ob ich den Quereinstieg in die IT-Branche wagen möchte, wo seit langem vom Arbeitskräftemangel die Rede ist und eine gewisse Lernfähigkeit erfordert wird.
            <br><br>
            Zuerst habe ich mit der Recherche über den Quereinstieg in die IT-Branche angefangen. Vor allem fand ich Webentwicklung interessant, da man mitten in der Digitalisierung an der Schnittstelle in der Gesellschaft arbeiten kann. Und Frontend-Entwicklung schien mir intuitiver und zugänglicher als Backend-Technologien, da ich keine Vorkenntnisse über Webentwicklung hatte. <br> <br>
            Die Möglichkeit, an einem Bootcamp teilzunehmen, war für mich leider aus finanziellen Gründen ausgeschlossen, so habe ich mich für ein Selbststudium der Frontend-Entwicklung entschlossen.
            
          </p>
        </div>
        <hr>
      </section>
      <section class="section-container">
        <div class="overview">
          <h1 class="overview__title">
           Lernmaterialien
          </h1>
          <div class="section-img">
            <img src="img/material.jpg" alt="contamplation" />
          </div>
        </div>
          <div class="quer__text">
            <p>Als Selbstlerner habe ich auf verschiedene Lernmaterialien zugegriffen. Im Laufe der Zeit musste ich ständig hinterfragen, ob ich die richtige Lernmethode und Lernmaterial verwende und ich habe sie gegebenenfalls anpassen. Dadurch konnte ich feststellen, dass das Lernen der Webentwicklung ein unilinearer und endloser Lernprozess ist. Erfahren Sie hier, welche Lernmaterialien ich benutzt habe.</p>
          </div>
        </div>
        <div class="lernmaterialien">
          <div class="material-container">
            <div class="material-overview-container">
              <h2 class="material-overview"><a href="https://www.codecademy.com/">1. Codecademy</a></h2>
            </div>
            <div class="material-toggle">
            <div>
                <p>
                  <button id="material-btn" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2">- Lerninhalte</button>  
                </p>
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div id="material-text-container" class="card card-body">
                      <ul>
                        <li>Grundlagen von HTML, CSS</li>
                        <li>Grundlagen von JavaScript(Array-Methoden, DOM-Manipulation, OOP, async-Methode)</li>
                        <li>Grundlagen der Frontend-Entwicklung (UI/UX, accessibility, responsive design)</li>
                      </ul>
                    </div>
                </div>
              </div>
  
              <div>
                <p>
                  <button id="material-btn" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">- Meine Erfahrung mit Codecademy</button>  
                </p>
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div id="material-text-container" class="card card-body">
                      <p>Für mich als jemanden, der keine Vorkenntnisse über Webentwicklung hatte, war der Frontend-Entwicklung-Kurs von Codecademy eine gut Wahl, um mich in die Webentwicklung einzuarbeiten. Man kann auf der interaktiven Lernplattform direkt mit dem Coden anfangen, ohne eine echte Programmierumgebung aufbauen zu müssen. Im Rückblick musste ich jedoch feststellen, dass dieser Punkt, der eigentlich ein großer Vorteil für Anfänger sein sollte, gleichzeitig ein Nachteil sein könnte, wenn man als Entwickler in einer echten Programmierumgebung arbeiten können möchte, gerade weil man heutzutage in der Lage sein soll, mit einer Vielzahl von Tools zu entwickeln.</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="material-container">
            <div class="material-overview-container">
              <h2 class="material-overview"><a href="https://www.freecodecamp.org">2. freeCodeCamp</a></h2>
            </div>
            <div class="material-toggle">
            
              <div>
                <p>
                  <button id="material-btn" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample2">- Lerninhalte</button>  
                </p>
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                    <div id="material-text-container" class="card card-body">
                      <ul>
                        <li>Grundlagen der Frontend-Entwicklung</li>
                        <li>Algorythmus-Übungen mit JavaScript</li>
                      </ul>
                    </div>
                </div>
              </div>
  
              <div>
                <p>
                  <button id="material-btn" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample2">- Meine Erfahrung mit freeCodeCamp</button>  
                </p>
                <div class="collapse multi-collapse" id="multiCollapseExample4">
                    <div id="material-text-container" class="card card-body">
                      <p>Nachdem ich mir mit dem Kurs von Codecademy die Grundkenntnisse der Frontend-Entwicklung angeeignet hatte, habe ich freeCodeCamp als Wiederholung benutzt, um das Gelernte zu festigen. Aus meiner Sicht ist er weniger geeignet, um umfangreiche Kenntnisse im jeweiligen Thema zu vertiefen. Dennoch war er für mich als Übungsmaterial, das kostenlos im Online zur Verfügung steht, keine schlechte Wahl. Verschiedene Videomaterialien, die vom freeCodeCamp auf YouTube angeboten sind, haben mir ebenso viel geholfen.</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="material-container">
            <div class="material-overview-container">
              <h2 class="material-overview"><a href="https://www.udemy.com/">3. Udemy</a></h2>
            </div>
            <div class="material-toggle">
            
              <div>
                <p>
                  <button id="material-btn" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample2">- Kurse</button>  
                </p>
                <div class="collapse multi-collapse" id="multiCollapseExample5">
                    <div id="material-text-container" class="card card-body">
                      <ul class="udemy-list">
                        <li><a href="https://www.udemy.com/course/advanced-css-and-sass/">“Advanced CSS and SASS: Flexbox, Grid, Animations and More!”, Jonas Schmedtmann.</a></li>
                        <li><a href="https://www.udemy.com/course/the-complete-javascript-course/">“The complete JavaScript Course: From zero to Expert!”, Jonas Schmedtmann.</a></li>
                        <li><a href="https://www.udemy.com/course/web-entwickler-masterclass/learn/lecture/13137956?start=75#overview">“Die komplette Web-Entwickler Masterclass”, Denis Panjuta/Jannis Seemann.</a></li>
                        <li><a href="https://www.udemy.com/course/50-projects-50-days/">“50 Projects In 50 Days - HTML, CSS & JavaScript”, Brad Traversy.</a></li>
                        <li><a href="https://www.udemy.com/course/api-course/">"API Crash Course: How to Create, Test & Document your APIs", Tarek Roshdy</a></li>
                      </ul>
                    </div>
                </div>
              </div>
              <div>
                <p>
                  <button id="material-btn" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample6" aria-expanded="false" aria-controls="multiCollapseExample2">- Lerninhalte</button>  
                </p>
                <div class="collapse multi-collapse" id="multiCollapseExample6">
                    <div id="material-text-container" class="card card-body">
                      <ul>
                        <li>CSS, Flexbox, Grid, responsive design</li>
                        <li>SASS, Bootstrap</li>
                        <li>Grundlagen von JavaScript (Array-Methoden, DOM-Manipulation, OOP, async-Methode)</li>
                        <li>Projektbezogene Webentwicklung</li>
                        <li>API</li>
                        <li>Grundlagen von PHP</li>
                      </ul>
                    </div>
                </div>
              </div>
              <div>
                <p>
                  <button id="material-btn" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample7" aria-expanded="false" aria-controls="multiCollapseExample2">- Meine Erfahrung mit Udemy</button>  
                </p>
                <div class="collapse multi-collapse" id="multiCollapseExample7">
                    <div id="material-text-container" class="card card-body">
                      <p>Im Vergleich zu den interaktiven Online-Lernplattformen wie Codecademy oder freeCodeCamp muss man und kann man mit Udemy-Kursen in der eigenen Programmierumgebung lernen, was eigentlich das wichtigste im Lernprozess sein soll. Mit allen Udemy-Kursen, mit denen ich gelernt habe, konnte ich mir fortgeschrittene Lerninhalte der Webentwicklung aneignen, da in den meisten Kursen intensiver als Codecademy oder freeCodeCamp mit den Lerninhalten auseinandergesetzt wird. Nach meiner Erfahrung kann man auch dadurch Lerninhalte besser und tiefer verstehen, dass man auf verschiedene Lernmaterialien nebeneinander zugreift und sich aus unterschiedlichen Perspektiven mit denselben Lerninhalten auseinandersetzt. Ich kann mir gut vorstellen, dass Udemy in meinem zukünftigen Arbeitsleben eines der besten Lernmaterialien sein wird.</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sonstige-container">
          <h2 class="sonstige-title">Sonstige Themen</h2>
          <div class="sonstige-liste">
            <ul>
              <li>Teamarbeit über Github</li>
              <li>Git-Workflow mit GitHub</li>
              <li>Wireframe mithilfe von Figma</li>
              <li>Grundlagen von Node.js, MongoDB</li>
            </ul>
          </div>
        </div>
      </section>
    </div>
    <footer id="footer">
      <div class="footer__container">
         <h5>Konnte ich Ihr Interesse wecken? Kontaktieren Sie mich!</h5>
          <button class="kontakt-btn"><a href="contact.html">Contact</a></button>
          <small class="copyright"
            >&#169;All copyright reserved to Kotaro Yuzawa 2022</small>
      </div>
    </footer>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
