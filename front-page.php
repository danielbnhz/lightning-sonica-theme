<?php get_header(); ?>

<main class="site-main">

    <section class="hero">
        <div class="container">
            <h1 class="shadow-header">Electronic Music</h1>
            <p class="tagline">
                Psytrance · Sound · Systems
            </p>
        </div>
    </section>
  <div class="section-divider"></div>
    
<div class="row-layout">
    <div class="square"></div>

    <section class="music">
        <div class="container">
            <h2>Music</h2>

            <div class="soundcloud-embed">
                <iframe width="100%" height="350" scrolling="no" frameborder="no" allow="autoplay"
                 src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/soundcloud%253Aplaylists%253A2164296806&color=%238c748c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                 <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                    <a href="https://soundcloud.com/lightning_sonica" title="lightning_sonica" target="_blank" style="color: #cccccc; text-decoration: none;">lightning_sonica</a> · 
                    <a href="https://soundcloud.com/lightning_sonica/sets/entity-playlist" title="Entity Playlist" target="_blank" style="color: #cccccc; text-decoration: none;">Entity Playlist</a>
                 </div>
            </div>
        </div>
    </section>

    <div class="square"></div>
</div>

  <div class="section-divider"></div>

<div class="row-layout fade-in-section">
    <div class="square"></div>

    <section class="waveform-section">
        <div class="waveform-section__inner container">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/ti_pluck_waveform.webp"
                alt="Waveform visualization"
                loading="lazy"
            />
        </div>
    </section>

    <div class="square"></div>
</div>

  <div class="section-divider"></div>



    <section class="audio-services">
  <div class="audio-services__inner">

    <div class="audio-services__media">
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/session_webpage.webp"
        alt="Audio mixing and electronic music production"
        loading="lazy"
      />
    </div>

    <div class="audio-services__content">
      <h2>Audio Mixing & Electronic Music Production</h2>

      <p>
        I offer professional mixing of audio stems and full electronic music
        production, with a focus on clarity, balance, and impact.
        Whether you’re working with raw stems or an unfinished idea,
        I shape sound into something cohesive, dynamic, and intentional.
      </p>

      <p>
        My background includes electronic and psytrance production,
        sound design, and detailed mixdown work — ensuring that each element
        occupies its own space without sacrificing energy or depth.
      </p>


    </div>

  </div>
</section>
<div class="section-divider"></div>

<section>
  <div class="pattern-gallery ">
    <div class="pattern-item fade-in-section">
      <img src="<?php echo get_template_directory_uri(); ?>/images/pattern1.webp" alt="Audio visual pattern 1">
    </div>
    <div class="pattern-item fade-in-section">
      <img src="<?php echo get_template_directory_uri(); ?>/images/pattern1.webp" alt="Audio visual pattern 1">
    </div>
    <div class="pattern-item fade-in-section">
      <img src="<?php echo get_template_directory_uri(); ?>/images/pattern1.webp" alt="Audio visual pattern 1">
    </div>
    </div>
   </section>

<section class="contact-section container">
    <h2 class="contact-title ">Contact</h2>

    <div class="contact-content">
        <form class="contact-form" method="post" action="#">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit" class="contact-button">
                Send Message
            </button>
        </form>

        <div class="contact-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/session_webpage_2.webp" alt="Session visual" />
        </div>
    </div>
</section>


</section>

<section class="music-visualizer">
    <div class="music-container container">
        <h2>YouTube</h2>
        <p class="music-description">
           More videos arriving soon ^_^
        </p>

        <div class="video-wrapper">
            <iframe 
                src="https://www.youtube.com/embed/yVDIEmVkTjM"
                title="Music Visualizer"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</section>



  <div class="section-divider"></div>



</main>

<?php get_footer(); ?>
