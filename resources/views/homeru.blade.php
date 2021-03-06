<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Портфолио
        </title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <script src="{{ asset('js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

    </head>
    <body>
    
        <nav class="nav">
          <div class="burger">
            <div class="burger__patty"></div>
          </div>

          <ul class="nav__list">
            <li class="nav__item">
              <a href="#1" class="nav__link c-blue"><img src="{{ asset('images/home-icon.png') }}" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="#2" class="nav__link c-yellow scrolly"><img src="{{ asset('images/about-icon.png') }}" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="#3" class="nav__link c-red"><img src="{{ asset('images/projects-icon.png') }}" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="#4" class="nav__link c-green"><img src="{{ asset('images/contact-icon.png') }}" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="/" class="nav__link c-blue"><img src="{{ asset('images/lang.png') }}" alt=""></a>
            </li>
          </ul>
        </nav>

        <section class="panel b-blue" id="1">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="home-content">
                      <div class="home-heading">
                        <h1><em>Нуров Нурали</em></h1>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="home-box-content">
                            <div class="left-text">
                              <h4>Я студент <em>SDU</em> По специальности ИС</h4>
                              <p>Всем привет, меня зовут Нурали и это мое портфолио где вы можете узнать всякую инфу обо мне</p>
                            </div>
                            <div class="right-image">
                              <img src="{{ asset('images/mmorty.jpg') }}" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
        <section class="panel b-yellow" id="2">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="about-content">
                      <div class="heading">
                        <h4>Обо мне</h4>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="about-box-content">
                            <img src="{{ asset('images/pors.jpg') }}" alt="">
                          </div>
                        </div>
                        <div class="col-md-7 col-md-offset-5">
                          <div class="about-box-text">
                            <h4>Обо мне</h4>
                            <p> Тут ничего нет так как это тест локализаций </p>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
        <section class="panel b-red" id="3">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="projects-content">
                      <div class="heading">
                        <h4>Интересы</h4>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="owl-carousel owl-theme projects-container">
                            <div>
                              <div class="project-item">
                                <a data-lightbox="image-1"><img src="{{ asset('images/java.jpg') }}" alt=""></a>
                                <div class="text-content">
                                  <h4>Программирование</h4>
                                  <p>Локализация сделана для профиля и я не использовал правильную SEO структуру</p>
                                  <div class="primary-button">
                                  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="project-item">
                                <a data-lightbox="image-1"><img src="{{ asset('images/music.jpg') }}" alt=""></a>
                                <div class="text-content">
                                  <h4>Mузыка</h4>
                                  <p>Lorem ipsum dolor, adipis scing elit etiam ante vehicula, aliquam mauris in, luctus neque.</p>
                                  <div class="primary-button">
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="project-item">
                                <a  data-lightbox="image-1"><img src="{{ asset('images/steam.jpg') }}" alt=""></a>
                                <div class="text-content">
                                  <h4>Игры</h4>
                                  <p>Lorem ipsum dolor, adipis scing elit etiam ante vehicula, aliquam mauris in, luctus neque.</p>
                                  <div class="primary-button">
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="project-item">
                                <a data-lightbox="image-1"><img src="{{ asset('images/photoshop.png') }}" alt=""></a>
                                <div class="text-content">
                                  <h4>Фото</h4>
                                  <p>Lorem ipsum dolor sit amet, adipis scing elit etiam sit amet ante vehicula, aliquam mauris in, luctus neque.</p>
                                  <div class="primary-button">
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="project-item">
                                <a data-lightbox="image-1"><img src="{{ asset('images/tech.jpg') }}" alt=""></a>
                                <div class="text-content">
                                  <h4>Технологий</h4>
                                  <p>Lorem ipsum dolor, adipis scing elit etiam ante vehicula, aliquam mauris in, luctus neque.</p>
                                  <div class="primary-button">
                                
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="project-item">
                                <a  data-lightbox="image-1"><img src="{{ asset('images/cars.jpg') }}" alt=""></a>
                                <div class="text-content">
                                  <h4>Машины</h4>
                                  <p>Lorem ipsum dolor, adipis scing elit etiam ante vehicula, aliquam mauris in, luctus neque.</p>
                                  <div class="primary-button">
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="project-item">
                                <a data-lightbox="image-1"><img src="{{ asset('images/wawlug.jpg') }} alt=""></a>
                                <div class="text-content">
                                  <h4>Wawluq</h4>
                                  <p>I like Wawluq</p>
                                  <div class="primary-button">
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
        <section class="panel b-green" id="4">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="contact-content">
                      <div class="heading">
                        <h4>Отправить сообщение</h4>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="contat-form">
                            <form id="contact" action="" method="post">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                              </fieldset>
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                              </fieldset>
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required></textarea>
                              </fieldset>
                              <fieldset>
                                <button type="submit" id="form-submit" class="btn">Send Message</button>
                              </fieldset>
                            </form>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="more-info">
                            <p>Lorem ipsum dolor , consectetur adipiscing elit. Nunc purus ligula, ullamcorper id velit id, vestibulum auc sapien. Sed quis mauris eget sem imperdiet rhoncus.<br><br>
                            <em>3344 Etiam mauris erat,
								<br>Vestibulum eu augue nec, 10550</em></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="footer">
                      <p>Copyright &copy; 2020 Nurov Nurali</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
      
        <script>window.jQuery || document.write('<script src="{{ asset("js/jquery-1.11.2.min.js") }}"><\/script>')</script>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

  

    </body>
</html>
