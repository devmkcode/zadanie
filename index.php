<?php get_header();?>
  <header class="header">
    <div class="header__bg">
      <img src="<?php echo get_template_directory_uri(); ?>/img/shutterstock_1105116683.png" alt="header image">
      <div class="header__caption">
      <div class="container">
        <h2>Ubezpieczenie majątkowe</h2>
        <h3>Skontaktuj się z nami i skorzystaj <br/> ze specjalnej oferty!</h3>
      </div>
    </div>
    </div> 
    <div class="container relative">
      <form class="header__form">
        <h4>Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę</h4>
        <input type="text" placeholder="Imię i nazwisko">
        <input type="email" placeholder="Adres e-mail">
        <input type="tel" placeholder="Nr telefonu">
        <div class="address">
          <input type="text" placeholder="Miejscowość">
          <input type="text" placeholder="Kod pocztowy" class="post-code">
        </div>
        <div class="policy">
          <input type="checkbox">
          <p class="policy__text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
        </div>
        <input type="submit" value="Wyślij">
        </form>
    </div>
  </header>
  <section class="insurance">
    <div class="container">
      <h1>Ubezpieczenia majątkowe</h1>
      <h3>Co obejmują?</h3>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>
      <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
      <a href="#" class="insurance__btn">Zamów ubezpieczenie</a>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/shutterstock_373266265.png" alt="insurance-image" class="insurance__image">
  </section>
<?php get_footer(); ?>