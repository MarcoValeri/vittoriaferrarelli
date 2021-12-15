<footer class="footer">
    <!-- 
        Add a function that allows WordPress users add content in the footer by
        WordPress menu
    -->
    <?php wp_footer(); ?>
    <section class="footer__content">
        <p>
            Made with <span class="heart">&hearts;</span> in London by 
            <a class="link-no-decoration" href="https://devmarco.com" target="_blank">Marco Valeri</a> 
            &copy; <?= date('Y'); ?> - All rights are reserved
        </p>
    </section>
</footer>
</body>
</html>