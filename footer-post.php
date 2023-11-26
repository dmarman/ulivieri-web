<?php
/**
 * The template for displaying the footer
 *
 */

?>

</div>

<div class="h-screen flex flex-col footer-post">
    <section class="bg-black scrollify h-screen text-center px-12 text-2xl md:text-5xl leading-tight flex items-center justify-center">
        <div class="text-center text-white leading-tight">
            <p>Compártelo en:</p>
            <ul>
                <li><p class="hover:text-pink-300 facebook">Facebook</p></li>
                <li><p class="hover:text-pink-300 twitter">Twitter</p></li>
                <li><p class="hover:text-pink-300 copy-btn">Copiar Link</p></li>
                <input type="text" value="<?php echo the_permalink(); ?>" id="copy-link" class="opacity-0">
            </ul>
        </div>
    </section>

    <?php get_template_part( 'template-parts/footer-nav' ); ?>

</div>

<script>
  var url = "<?php echo the_permalink(); ?>";
  var text = '<?php the_title(); ?>';
  var params = "menubar=no,toolbar=no,status=no,width=570,height=570"; // for window

  var facebook = document.querySelector('.facebook');
  var twitter = document.querySelector('.twitter');
  var copyBtn = document.querySelector('.copy-btn');

  facebook.addEventListener('click', function(ev) {
    let shareUrl = `http://www.facebook.com/sharer/sharer.php?u=${url}`;
    window.open(shareUrl,"NewWindow" , params);
  });
  twitter.addEventListener('click', function(ev) {
    let shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${text}`;
    window.open(shareUrl,"NewWindow" , params);
  });

  copyBtn.addEventListener('click', function(ev) {
    var copyText = document.getElementById("copy-link");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    console.log(copyText.value)
  });
</script>

<?php wp_footer(); ?>

</body>
</html>