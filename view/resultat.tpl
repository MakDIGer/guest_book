{% include 'header.tpl' %}
{% for item in items %}
        <section id="main_section_warning">
            <article id="main_article_warning">
                <header>
                    <h2>{{ item.title }}</h2>
                </header>
                <p>{{ item.resultat }}</p>
                <footer>
                    <p class="wlink"><a href="index.php?p=records">Чтобы вернуться назад, жмите тут.</a></p>
                </footer>
            </article>               
        </section>
{% endfor %}
{% include 'footer.tpl' %}