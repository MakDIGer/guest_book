{% include 'header.tpl' %}
        <section id="main_section">
            {% for item in items %}
            <article>
                <header>
                    <h3><a href="index.php?p=record&pp={{ item.id }}">{{ item.title }}</a></h3>
                </header>
                <p>{{ item.text }}</p>
                <footer>
                    <time datetime="{{ item.datepost }}"><em>Опубликовал <a href="email:{{ item.email }}">{{ item.nickname }}</a> {{ item.datepost }} {{ item.timepost }}</em></time>
                    </footer>
            </article>
            {% endfor %}               
        </section>
{% include 'footer.tpl' %}